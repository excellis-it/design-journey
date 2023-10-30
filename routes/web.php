<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\RequestController;
use App\Http\Controllers\User\BrandProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Requestcontroller as AdminRequestController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\HomeCmsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\FreeIllustrationController;
use App\Http\Controllers\Admin\FreeIconController;
use App\Http\Controllers\Admin\HelpCenterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ResourcesController;
use App\Http\Controllers\Frontend\SolutionsController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\PaymentController;
use Illuminate\Support\Facades\Artisan;

// Clear cache
Route::get('clear', function () {
    Artisan::call('optimize:clear');
    return "Optimize clear has been successfully";
});

/* ----------------- Frontend Routes -----------------*/
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/perks', [HomeController::class, 'perks'])->name('perks');
Route::get('/admin', [AuthController::class, 'adminLogin'])->name('admin.login');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-store', [AuthController::class, 'registerStore'])->name('register.store');
Route::post('/user-login-check', [AuthController::class, 'loginCheck'])->name('login.check');
Route::post('forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');
Route::post('change-password', [ForgetPasswordController::class, 'changePassword'])->name('change.password');
Route::get('forget-password/show', [ForgetPasswordController::class, 'forgetPasswordShow'])->name('forget.password.show');
Route::get('reset-password/{id}/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');

Route::get('/pricing',[HomeController::class, 'pricing'])->name('pricing');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/help-center', [HomeController::class, 'helpCenter'])->name('help-center');
Route::get('/help-centers/details', [HomeController::class, 'helpCenterDetails'])->name('help-centers.get-details');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/career-details', [HomeController::class, 'careerDetails'])->name('career.details');
Route::get('/career-form', [HomeController::class, 'careerForm'])->name('career-form');
Route::get('/free-illustration', [ResourcesController::class, 'freeIllustration'])->name('free-illustration');
Route::get('/free-icon', [ResourcesController::class, 'freeIcon'])->name('free-icons');
Route::get('/guides', [ResourcesController::class, 'guides'])->name('guides');
Route::get('/case-studies', [ResourcesController::class, 'casestudies'])->name('case-studies');
Route::get('/blog/{id}', [HomeController::class, 'blogDetails'])->name('blog-details');
//solutions routes
Route::get('/social-media-design', [SolutionsController::class, 'socialMediaDesign'])->name('social.media.design');
Route::get('/website-design', [SolutionsController::class, 'websiteDesign'])->name('website.design');
Route::get('/illustration-design',[SolutionsController::class, 'illustrationDesign'])->name('illustration.design');
Route::get('/presentation-design',[SolutionsController::class, 'presentationDesign'])->name('presentation.design');

Route::get('/our-work', [HomeController::class, 'ourWork'])->name('our.work');
Route::post('/our-work/filter',[HomeController::class, 'ourWorkFilter'])->name('our-work.filter');
Route::post('/plan/filter',[HomeController::class, 'pricingFilter'])->name('pricing.filter');
Route::post('contact-us/submit', [ContactusController::class, 'contactUsSubmit'])->name('contact-us.submit');

//payment routes
Route::get('/payment/{payment}',[PaymentController::class, 'payment'])->name('payment.details');
Route::post('/payment/submit',[PaymentController::class, 'paymentSubmit'])->name('payment.submit');
Route::get('/payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');



/* ----------------- Admin Routes -----------------*/

// Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::group(['prefix' => 'admin'], function () {
    Route::post('/login-check', [AdminController::class, 'loginCheck'])->name('admin.login.check');
    Route::group(['middleware' => 'admin'], function () {

        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile');
        Route::post('profile/update', [ProfileController::class, 'profileUpdate'])->name('admin.profile.update');
        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout'); 

        Route::resources([
            'blogs' => AdminBlogController::class,
            'categories' => CategoryController::class,
            'plans' => PlanController::class,
            'types' => TypeController::class,
            'free-illustrations' => FreeIllustrationController::class,
            'free-icons' => FreeIconController::class,
            'help-centers' => HelpCenterController::class,
        ]);

        Route::get('/blog-categories', [AdminBlogController::class, 'blogCategoryList'])->name('blogs.categories.list');
        Route::get('/blog-categories/create', [AdminBlogController::class, 'createBlogCategory'])->name('blogs.categories.create');
        Route::post('/blog-categories/store', [AdminBlogController::class, 'storeBlogCategory'])->name('blogs.categories.store');
        Route::get('/blog-categories/edit/{id}', [AdminBlogController::class, 'editBlogCategory'])->name('blogs.categories.edit');
        Route::post('/blog-categories/update', [AdminBlogController::class, 'updateBlogCategory'])->name('blogs.categories.update');
        Route::get('/blog-categories/delete/{id}', [AdminBlogController::class, 'deleteBlogCategory'])->name('blogs.categories.delete');
      
        Route::post('/categories/statusChange', [CategoryController::class, 'changeCategoryStatus'])->name('categories.change-status');
        Route::get('/categories/deleteImage/{id}', [CategoryController::class, 'deleteCategoryImage'])->name('categories.deleteImage');
        Route::get('/categories/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
        Route::post('/categories/update', [CategoryController::class, 'updateCategory'])->name('categories.update');
        Route::post('/blogs/statusChange', [AdminBlogController::class, 'changeBlogStatus'])->name('blogs.change-status');

        Route::get('/blogs/delete/{id}', [AdminBlogController::class, 'deleteBlog'])->name('delete.blog');
        Route::post('/blogs/update', [AdminBlogController::class, 'blogUpdate'])->name('admin.blogs.update');
        Route::get('/plans/delete/{id}',[PlanController::class, 'deletePlan'])->name('delete.plans');
        Route::post('/plans/update', [PlanController::class, 'planUpdate'])->name('update.plans');
        Route::get('/plans/deleteSpecification/{id}',[PlanController::class, 'deleteSpecification'])->name('specification.delete');
        Route::get('/types/delete/{id}',[TypeController::class, 'deleteType'])->name('delete.types');
        Route::post('/types/update', [TypeController::class, 'typeUpdate'])->name('update.type');
        Route::get('/requests/list',[AdminRequestController::class, 'requestList'])->name('requests.list');
        Route::post('/requests/change-status', [AdminRequestController::class, 'changeRequestStatus'])->name('change.request.status');
        Route::get('/requests/details/{id}',[AdminRequestController::class, 'userRequestDetails'])->name('admin.request-details');
        Route::post('/requests/update', [AdminRequestController::class, 'requestFileUpdate'])->name('request.file-upload');
        Route::get('/requests/file/{id}',[AdminRequestController::class, 'viewRequestFile'])->name('request-files.view');
        Route::get('/requests/file-download/{id}',[AdminRequestController::class, 'downloadRequestFile'])->name('download.zip-files');

        Route::get('/free-illustrations/delete/{id}',[FreeIllustrationController::class, 'deleteIllustration'])->name('delete.free-illustrations');
        Route::post('/free-illustrations/update',[FreeIllustrationController::class, 'updateIllustration'])->name('update.free-illustrations');
        Route::get('/free-illustrations-images',[FreeIllustrationController::class, 'illustrationImages'])->name('free-illustrations.images.list');
        Route::get('/free-illustrations-images/create',[FreeIllustrationController::class, 'createIllustrationImage'])->name('free-illustrations.image.create');
        Route::post('/free-illustrations-images/store',[FreeIllustrationController::class, 'storeIllustrationImage'])->name('free-illustrations.image.store');
        Route::get('/free-illustrations-images/edit/{id}',[FreeIllustrationController::class, 'editIllustrationImage'])->name('free-illustrations.image.edit');
        Route::get('/free-illustrations-images/delete/{id}',[FreeIllustrationController::class, 'deleteIllustrationImage'])->name('delete.image.free-illustrations');
        Route::post('/free-illustrations-images/updateImage',[FreeIllustrationController::class, 'updateIllustrationImage'])->name('free-illustrations.image.update');

        //subtype
        Route::get('/subtypes',[TypeController::class, 'subTypeList'])->name('type.subtypes.list');
        Route::get('/subtypes/create',[TypeController::class, 'createSubType'])->name('type.subtypes.create');
        Route::post('/subtypes/store',[TypeController::class, 'storeSubType'])->name('type.subtypes.store');
        Route::get('/subtypes/edit/{id}',[TypeController::class, 'editSubType'])->name('type.subtypes.edit');
        Route::post('/subtypes/update',[TypeController::class, 'updateSubType'])->name('type.subtypes.update');
        Route::get('/subtypes/delete/{id}',[TypeController::class, 'deleteSubType'])->name('type.subtypes.delete');
        Route::get('/users', [UserController::class, 'userList'])->name('users.index');
        Route::post('/users/statusChange', [UserController::class, 'changeUserStatus'])->name('user.change-status');
        Route::get('/users/delete/{id}', [UserController::class, 'deleteUser'])->name('delete.user');
        Route::get('/contact-us', [UserController::class, 'contactUsList'])->name('contact.us.list');

        Route::get('/help-centers/edit/{id}', [HelpCenterController::class, 'editHelpCenter'])->name('help-centers.edit');
        Route::post('/help-centers/update',[HelpCenterController::class, 'updateHelpCenter'])->name('help-centers.update');
        Route::get('/help-centers/delete/{id}',[HelpCenterController::class, 'deleteHelpCenter'])->name('help-centers.delete');
        

        //cms routes
        Route::group(['prefix'=>'cms'], function(){
            //home cms
            Route::get('/home-cms', [HomeCmsController::class, 'homeCms'])->name('home.cms');
            Route::post('/homeCms/update', [HomeCmsController::class, 'homeCmsUpdate'])->name('home.cms.update');
            //about cms
            Route::get('/about-cms', [HomeCmsController::class, 'aboutCms'])->name('about.cms');
            Route::post('/aboutCms/update', [HomeCmsController::class, 'aboutCmsUpdate'])->name('about.cms.update');
            //solution cms
            Route::get('/solution-cms', [HomeCmsController::class, 'solutionCms'])->name('solution.cms');
            Route::post('/solutionCms/update', [HomeCmsController::class, 'solutionCmsUpdate'])->name('solution.cms.update');

        });
        Route::get('/solution/edit', [HomeCmsController::class, 'solutionEdit'])->name('solution.design.edit');
        Route::post('/solution/update', [HomeCmsController::class, 'solutionUpdate'])->name('solution.design.update');

        Route::get('screen-shots', [HomeCmsController::class, 'screenShots'])->name('screen.shots');
    });
});

// Route::get('/user-dashboard', [DashboardController::class, 'dashboard'])->name('user.dashboard');
Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => 'user'], function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('user.dashboard');
        Route::get('profile', [UserProfileController::class, 'index'])->name('user.profile');
        Route::post('profile/update', [UserProfileController::class, 'profileUpdate'])->name('user.profile.update');
        Route::get('logout', [UserProfileController::class, 'logout'])->name('user.logout');

        Route::get('/order/new', [RequestController::class, 'createOrder'])->name('order.create');
        Route::get('/order/{id}', [RequestController::class, 'singleOrder'])->name('order.single');
        Route::get('/order/form/{id}', [RequestController::class, 'formOrder'])->name('order.form');

        Route::get('/request/download/{id}', [RequestController::class, 'userZipDownload'])->name('user.zip-files.download');

        Route::post('/presentation/store',[RequestController::class, 'submitPresentation'])->name('presentation.submit');
        Route::get('/request/list',[RequestController::class, 'requestList'])->name('request.list');
        Route::get('/request/deatils/{id}',[RequestController::class, 'requestDetails'])->name('request.details');

        Route::resources([
            'brand-profile' => BrandProfileController::class,
        ]);

        Route::get('/brand-profile/edit/{id}', [BrandProfileController::class, 'editBrandProfile'])->name('edit.brand-profile');
        Route::post('/brand-profile/store', [BrandProfileController::class, 'updateBrandProfile'])->name('update.brand-profile');

    });
});


Route::get('/cronsStartToWorkEmailSend', function () {
    Artisan::call('send:mail');
    return true;
});
