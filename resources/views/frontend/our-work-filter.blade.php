<div class="row justify-content-center grid">
@foreach($category_images as $category_image)
    <!-- single - start -->
    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all socialdesign">
        <div class="feature-section-content text-center">
            <a href="">
                <figure>
                    <img src="{{ asset($category_image->image) }}"
                        alt="" >
                </figure>
            </a>
        </div>
    </div>
@endforeach  
</div>
