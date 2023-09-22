<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\HomeCmsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SolutionsController;
use Illuminate\Support\Facades\Artisan;

// Clear cache
Route::get('clear', function () {
    Artisan::call('optimize:clear');
    return "Optimize clear has been successfully";
});

/* ----------------- Frontend Routes -----------------*/
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/admin', [AuthController::class, 'login'])->name('admin.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-store', [AuthController::class, 'registerStore'])->name('register.store');
Route::post('/user-login-check', [AuthController::class, 'loginCheck'])->name('login.check');
Route::post('forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');
Route::post('change-password', [ForgetPasswordController::class, 'changePassword'])->name('change.password');
Route::get('forget-password/show', [ForgetPasswordController::class, 'forgetPasswordShow'])->name('forget.password.show');
Route::get('reset-password/{id}/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');


Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}', [HomeController::class, 'blogDetails'])->name('blog-details');
//solutions routes
Route::get('/social-media-design', [SolutionsController::class, 'socialMediaDesign'])->name('social.media.design');
Route::get('/website-design', [SolutionsController::class, 'websiteDesign'])->name('website.design');
Route::get('/illustration-design',[SolutionsController::class, 'illustrationDesign'])->name('illustration.design');
Route::get('/presentation-design',[SolutionsController::class, 'presentationDesign'])->name('presentation.design');

Route::get('/our-work', [HomeController::class, 'ourWork'])->name('our.work');

/* ----------------- Admin Routes -----------------*/

// Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile');
        Route::post('profile/update', [ProfileController::class, 'profileUpdate'])->name('admin.profile.update');
        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

        Route::resources([
            'blogs' => AdminBlogController::class,
            'categories' => CategoryController::class,
        ]);
        Route::post('/categories/statusChange', [CategoryController::class, 'changeCategoryStatus'])->name('categories.change-status');
        Route::get('/categories/deleteImage/{id}', [CategoryController::class, 'deleteCategoryImage'])->name('categories.deleteImage');
        Route::post('/categories/update', [CategoryController::class, 'updateCategory'])->name('categories.update');
        Route::post('/blogs/statusChange', [AdminBlogController::class, 'changeBlogStatus'])->name('blogs.change-status');
        Route::get('/blogs/delete/{id}', [AdminBlogController::class, 'deleteBlog'])->name('delete.blog');
        Route::post('/blog-update/{id}', [AdminBlogController::class, 'blogUpdate'])->name('admin.blogs.update');
        
        //cms routes
        Route::group(['prefix'=>'cms'], function(){
            //home cms
            Route::get('/home-cms', [HomeCmsController::class, 'homeCms'])->name('home.cms');
            Route::post('/homeCms/update', [HomeCmsController::class, 'homeCmsUpdate'])->name('home.cms.update');
            //about cms
            Route::get('/about-cms', [HomeCmsController::class, 'aboutCms'])->name('about.cms');
            Route::post('/aboutCms/update', [HomeCmsController::class, 'aboutCmsUpdate'])->name('about.cms.update');
        });
    });
});

Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => 'user'], function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('user.dashboard');
        Route::get('profile', [UserProfileController::class, 'index'])->name('user.profile');
        Route::post('profile/update', [UserProfileController::class, 'profileUpdate'])->name('user.profile.update');
        Route::get('logout', [UserProfileController::class, 'logout'])->name('user.logout');
    });
});


Route::get('/cronsStartToWorkEmailSend', function () {
    Artisan::call('send:mail');
    return true;
});
