<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Product-details']); ?>
    <style>
        .filled-heart {
            color: red
        }
    </style>
    <main class="pt-90">
        <div class="mb-md-1 pb-md-3"></div>
        <section class="product-single container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="product-single__media" data-media-type="vertical-thumbnail">
                        <div class="product-single__image">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    
                                    
                                    <div class="swiper-slide product-single__image-item">
                                        
                                        <img loading="lazy" class="h-auto"
                                            src="<?php echo e(asset('storage/uploads/products/thumbnails/' . $product->image)); ?>"
                                            width="674" height="674" alt="" />
                                        <a data-fancybox="gallery"
                                            href="<?php echo e(asset('storage/uploads/products/thumbnails/' . $product->image)); ?>"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_zoom" />
                                            </svg>
                                        </a>
                                    </div>
                                    
                                    
                                    <?php $__currentLoopData = explode(',', $product->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide product-single__image-item">
                                            <img loading="lazy" class="h-auto"
                                                src="<?php echo e(asset('storage/uploads/products/gallery/' . trim($image))); ?>"
                                                width="674" height="674" alt="<?php echo e($product->name); ?>" />
                                            <a data-fancybox="gallery" href="../images/products/product_0-1.html"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_zoom" />
                                                </svg>
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="swiper-button-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></div>
                                <div class="swiper-button-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></div>
                            </div>
                        </div>
                        <div class="product-single__thumbnail">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide product-single__image-item"><img loading="lazy"
                                            class="h-auto"
                                            src="<?php echo e(asset('storage/uploads/products/thumbnails/' . $product->image)); ?>"
                                            width="104" height="104" alt="<?php echo e($product->name); ?>" /></div>
                                    <?php $__currentLoopData = explode(',', $product->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide product-single__image-item"><img loading="lazy"
                                                class="h-auto"
                                                src="<?php echo e(asset('storage/uploads/products/gallery/' . trim($image))); ?>"
                                                width="104" height="104" alt="<?php echo e($product->name); ?>" /></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-between mb-4 pb-md-2">
                        <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                            <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                            <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">The Shop</a>
                        </div><!-- /.breadcrumb -->

                        <div
                            class="product-single__prev-next d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
                            <a href="#" class="text-uppercase fw-medium"><svg width="10" height="10"
                                    viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_prev_md" />
                                </svg><span class="menu-link menu-link_us-s">Prev</span></a>
                            <a href="#" class="text-uppercase fw-medium"><span
                                    class="menu-link menu-link_us-s">Next</span><svg width="10" height="10"
                                    viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_md" />
                                </svg></a>
                        </div><!-- /.shop-acs -->
                    </div>
                    <h1 class="product-single__name"><?php echo e($product->name); ?></h1>
                    <div class="product-single__rating">
                        <div class="reviews-group d-flex">
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php for($i = 1; $i <= $review->rating; $i++): ?>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"
                                        fill="#FFD700">
                                        <use href="#icon_star" />
                                    </svg>
                                <?php endfor; ?>
                                
                                <?php for($i = $review->rating + 1; $i <= 5; $i++): ?>
                                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                                    </svg>
                                <?php endfor; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <span class="reviews-note text-lowercase text-secondary ms-1"><?php echo e($reviews->count()); ?>

                            reviews</span>
                    </div>
                    <div class="product-single__price">
                        <span class="current-price">
                            <?php if($product->sale_price): ?>
                                <s>₹<?php echo e($product->regular_price); ?></s> ₹<?php echo e($product->sale_price); ?>

                            <?php else: ?>
                                ₹<?php echo e($product->regular_price); ?>

                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="product-single__short-desc">
                        <p><?php echo e($product->short_description); ?></p>
                    </div>
                    <?php if(Cart::instance('cart')->content()->where('id', $product->id)->count() > 0): ?>
                        <a href="<?php echo e(route('cart.index')); ?>" class="btn btn-warning mb-3">Go to Cart</a>
                    <?php else: ?>
                        <form name="addtocart-form" method="post" action="<?php echo e(route('cart.add')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="product-single__addtocart">
                                <div class="qty-control position-relative">
                                    <input type="number" name="quantity" value="1" min="1"
                                        class="qty-control__number text-center">
                                    <div class="qty-control__reduce">-</div>
                                    <div class="qty-control__increase">+</div>
                                </div><!-- .qty-control -->
                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                <input type="hidden" name="name" value="<?php echo e($product->name); ?>">
                                <input type="hidden" name="price"
                                    value="<?php echo e($product->sale_price == '' ? $product->regular_price : $product->sale_price); ?>">
                                <button type="submit" class="btn btn-primary btn-addtocart"
                                    data-aside="cartDrawer">Add to
                                    Cart</button>
                            </div>
                        </form>
                    <?php endif; ?>
                    <div class="product-single__addtolinks">
                        <?php if(Cart::instance('wishlist')->content()->where('id', $product->id)->count() > 0): ?>
                            <form
                                action="<?php echo e(route('wishlist.item.remove', ['rowId' => Cart::instance('wishlist')->content()->where('id', $product->id)->first()->rowId])); ?>"
                                method="POST" id="frm-remove-item">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <a href="javascript:void(0)"
                                    onclick="document.getElementById('frm-remove-item').submit();"
                                    class="menu-link menu-link_us-s add-to-wishlist filled-heart"><svg width="16"
                                        height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg><span>Remove from Wishlist</span></a>
                            </form>
                        <?php else: ?>
                            <form action="<?php echo e(route('wishlist.add')); ?>" method="post" id="wishlist-form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>" />
                                <input type="hidden" name="name" value="<?php echo e($product->name); ?>" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="price"
                                    value="<?php echo e($product->sale_price == '' ? $product->regular_price : $product->sale_price); ?>" />
                                <a href="javascript:void(0)" class="menu-link menu-link_us-s add-to-wishlist"
                                    onclick="document.getElementById('wishlist-form').submit();"><svg width="16"
                                        height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg><span>Add to Wishlist</span></a>
                            </form>
                        <?php endif; ?>
                        <share-button class="share-button">
                            <button
                            onclick="handleShare()"
                                class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                                <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_sharing" />
                                </svg>
                                <span>Share</span>
                            </button>
                            <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                                <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                                <div id="Article-share-template__main"
                                    class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                                    <div class="field grow mr-4">
                                        <label class="field__label sr-only" for="url">Link</label>
                                        <input type="text" class="field__input w-full" id="url"
                                            value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                                            placeholder="Link" onclick="this.select();" readonly="">
                                    </div>
                                    <button class="share-button__copy no-js-hidden">
                                        <svg class="icon icon-clipboard inline-block mr-1" width="11"
                                            height="13" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true" focusable="false" viewBox="0 0 11 13">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <span class="sr-only">Copy link</span>
                                    </button>
                                </div>
                            </details>
                        </share-button>
                        <script src="js/details-disclosure.html" defer="defer"></script>
                        <script src="js/share.html" defer="defer"></script>
                    </div>
                    <div class="product-single__meta-info">
                        <div class="meta-item">
                            <label>SKU:</label>
                            <span><?php echo e($product->SKU); ?></span>
                        </div>
                        <div class="meta-item">
                            <label>Categories:</label>
                            <span><?php echo e($product->category->name); ?></span>
                        </div>
                        <div class="meta-item">
                            <label>Tags:</label>
                            <span>N/A</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-single__details-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore active" id="tab-description-tab" data-bs-toggle="tab"
                            href="#tab-description" role="tab" aria-controls="tab-description"
                            aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore" id="tab-additional-info-tab" data-bs-toggle="tab"
                            href="#tab-additional-info" role="tab" aria-controls="tab-additional-info"
                            aria-selected="false">Additional Information</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab"
                            href="#tab-reviews" role="tab" aria-controls="tab-reviews"
                            aria-selected="false">Reviews (<?php echo e($reviews->count()); ?>)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
                        aria-labelledby="tab-description-tab">
                        <div class="product-single__description">
                            <?php echo e($product->description); ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-additional-info" role="tabpanel"
                        aria-labelledby="tab-additional-info-tab">
                        <div class="product-single__addtional-info">
                            
                            <div class="item">
                                <label class="h6">Dimensions</label>
                                <span>90 x 60 x 90 cm</span>
                            </div>
                            <div class="item">
                                <label class="h6">Size</label>
                                <span>XS, S, M, L, XL</span>
                            </div>
                            <div class="item">
                                <label class="h6">Color</label>
                                <span>Black, Orange, White</span>
                            </div>
                            <div class="item">
                                <label class="h6">Storage</label>
                                <span>Relaxed fit shirt-style dress with a rugged</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews-tab">
                        <h2 class="product-single__reviews-title">Reviews</h2>
                        <div class="product-single__reviews-list">
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product-single__reviews-item">
                                    <div class="customer-avatar">
                                        <img loading="lazy"
                                            src="<?php echo e(asset('storage/uploads/reviewImage/' . $review->image)); ?>"
                                            alt="" />
                                    </div>
                                    <div class="customer-review">
                                        <div class="customer-name">
                                            <h6><?php echo e($review->name); ?></h6>
                                            <div class="reviews-group d-flex">
                                                
                                                <?php for($i = 1; $i <= $review->rating; $i++): ?>
                                                    <svg class="review-star" viewBox="0 0 9 9"
                                                        xmlns="http://www.w3.org/2000/svg" fill="#FFD700">
                                                        <use href="#icon_star" />
                                                    </svg>
                                                <?php endfor; ?>
                                                
                                                <?php for($i = $review->rating + 1; $i <= 5; $i++): ?>
                                                    <svg class="star-rating__star-icon" width="12" height="12"
                                                        fill="#ccc" viewBox="0 0 12 12"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                                                    </svg>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <div class="review-date"><?php echo e($review->created_at->format('m-d-Y')); ?></div>
                                        <div class="review-text">
                                            <p><?php echo e($review->comment); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <div class="product-single__review-form">
                            <form name="customer-review-form" method="POST"
                                action="<?php echo e(route('user.reviews.store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                <input type="hidden" name="rating" id="form-input-rating" value="">

                                <h5>Be the first to review “Message <?php echo e($product->name); ?>”</h5>
                                <p>Your email address will not be published. Required fields are marked *</p>

                                <div class="select-star-rating">
                                    <label>Your rating *</label>
                                    <span class="star-rating" id="star-rating">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <svg class="star-rating__star-icon cursor-pointer"
                                                data-value="<?php echo e($i); ?>" width="20" height="20"
                                                fill="#ccc" viewBox="0 0 12 12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7857 4.76562H7.71429L6.42857 1.29688C6.35714 1.13281 6.21429 1 6 1C5.78571 1 5.64286 1.13281 5.57143 1.29688L4.28571 4.76562H1.21429C1.07143 4.76562 0.857143 4.84598 0.785714 5.04687C0.714286 5.24777 0.785714 5.42969 0.928571 5.55469L3.57143 8.00391L2.5 11.2656C2.42857 11.4297 2.5 11.5938 2.64286 11.6836C2.78571 11.7734 2.92857 11.7734 3.07143 11.6836L6 9.80859L8.92857 11.6836C9.07143 11.7734 9.21429 11.7734 9.35714 11.6836C9.5 11.5938 9.57143 11.4297 9.5 11.2656L8.42857 8.00391L11.0714 5.55469C11.2143 5.42969 11.2857 5.24777 11.1429 5.04687Z" />
                                            </svg>
                                        <?php endfor; ?>
                                    </span>

                                </div>

                                <div class="mb-4">
                                    <textarea name="comment" class="form-control form-control_gray" placeholder="Your Review" cols="30"
                                        rows="8"><?php echo e(old('comment')); ?></textarea>
                                </div>

                                <div class="form-label-fixed mb-4">
                                    <label for="form-input-name" class="form-label">Name *</label>
                                    <input name="name" value="<?php echo e(old('name')); ?>" id="form-input-name"
                                        class="form-control form-control-md form-control_gray">
                                </div>

                                <div class="form-label-fixed mb-4">
                                    <label for="form-input-email" class="form-label">Email address *</label>
                                    <input name="email" type="email" value="<?php echo e(old('email')); ?>"
                                        id="form-input-email" class="form-control form-control-md form-control_gray">
                                </div>

                                <fieldset class="p-4 border border-gray-300 rounded-xl shadow-sm mb-6">
                                    <div class="body-title text-lg font-semibold mb-3">
                                        Upload image
                                    </div>

                                    <div class="upload-image flex flex-wrap gap-4 items-center">
                                        <div class="item w-32 h-32 rounded-lg overflow-hidden shadow-md border border-gray-200"
                                            id="imgpreview">
                                            <?php if(old('image')): ?>
                                                <img src="<?php echo e(asset('storage/uploads/reviewImage/' . old('image'))); ?>"
                                                    class="object-cover w-full h-full transition duration-300 hover:scale-105"
                                                    alt="Uploaded Review Image">
                                            <?php endif; ?>
                                        </div>

                                        <div id="upload-file"
                                            class="item up-load w-60 h-32 border-2 border-dashed border-gray-300 rounded-lg flex flex-col items-center justify-center cursor-pointer hover:border-blue-400 hover:bg-blue-50 transition duration-200">
                                            <label
                                                class="uploadfile text-center w-full h-full flex flex-col items-center justify-center px-2"
                                                for="myFile">
                                                <span class="icon text-3xl text-blue-500 mb-1">
                                                    <i class="icon-upload-cloud"></i>
                                                </span>
                                                <span class="body-text text-sm text-gray-600">
                                                    Drop your image or <span class="text-blue-500 font-medium">click to
                                                        browse</span>
                                                </span>
                                                <input type="file" id="myFile" name="image" accept="image/*"
                                                    class="hidden">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="form-check mb-4">
                                    <input class="form-check-input form-check-input_fill" type="checkbox"
                                        id="remember_checkbox">
                                    <label class="form-check-label" for="remember_checkbox">
                                        Save my name, email, and website for next time.
                                    </label>
                                </div>

                                <div class="form-action">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="products-carousel container">
            <h2 class="h3 text-uppercase mb-4 pb-xl-2 mb-xl-4">Related <strong>Products</strong></h2>

            <div id="related_products" class="position-relative">
                <div class="swiper-container js-swiper-slider"
                    data-settings='{
                "autoplay": false,
                "slidesPerView": 4,
                "slidesPerGroup": 4,
                "effect": "none",
                "loop": true,
                "pagination": {
                  "el": "#related_products .products-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": "#related_products .products-carousel__next",
                  "prevEl": "#related_products .products-carousel__prev"
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "slidesPerGroup": 2,
                    "spaceBetween": 14
                  },
                  "768": {
                    "slidesPerView": 3,
                    "slidesPerGroup": 3,
                    "spaceBetween": 24
                  },
                  "992": {
                    "slidesPerView": 4,
                    "slidesPerGroup": 4,
                    "spaceBetween": 30
                  }
                }
              }'>
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide product-card">
                                <div class="pc__img-wrapper">
                                    <a
                                        href="<?php echo e(route('shop.product.details', ['product_slug' => $rproduct->slug])); ?>">
                                        <img loading="lazy"
                                            src="<?php echo e(asset('storage/uploads/products/thumbnails/' . $rproduct->image)); ?>"
                                            width="330" height="400" alt="<?php echo e($rproduct->name); ?>"
                                            class="pc__img">

                                        <?php $__currentLoopData = explode(',', $rproduct->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img loading="lazy"
                                                src="<?php echo e(asset('storage/uploads/products/gallery/' . $image)); ?>"
                                                width="330" height="400" alt="<?php echo e($rproduct->name); ?>"
                                                class="pc__img pc__img-second">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </a>
                                    <?php if(Cart::instance('cart')->content()->where('id', $rproduct->id)->count() > 0): ?>
                                        <a href="<?php echo e(route('cart.index')); ?>"
                                            class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium btn-warning mb-3">Go
                                            to Cart</a>
                                    <?php else: ?>
                                        <form name="addtocart-form" method="post" action="<?php echo e(route('cart.add')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id" value="<?php echo e($rproduct->id); ?>">
                                            <input type="hidden" name="name" value="<?php echo e($rproduct->name); ?>">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="price"
                                                value="<?php echo e($rproduct->sale_price == '' ? $rproduct->regular_price : $rproduct->sale_price); ?>">
                                            <button type="submit"
                                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"
                                                data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                        </form>
                                    <?php endif; ?>
                                </div>

                                <div class="pc__info position-relative">
                                    <p class="pc__category"><?php echo e($rproduct->category->name); ?></p>
                                    <h6 class="pc__title"><a href="details.html"><?php echo e($rproduct->name); ?></a></h6>
                                    <div class="product-card__price d-flex">
                                        <span class="money price">
                                            <?php if($rproduct->sale_price): ?>
                                                <s>₹<?php echo e($rproduct->regular_price); ?></s> ₹<?php echo e($rproduct->sale_price); ?>

                                            <?php else: ?>
                                                ₹<?php echo e($rproduct->regular_price); ?>

                                            <?php endif; ?>
                                        </span>
                                    </div>

                                    <button
                                        class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container js-swiper-slider -->

                <div
                    class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_prev_md" />
                    </svg>
                </div><!-- /.products-carousel__prev -->
                <div
                    class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_next_md" />
                    </svg>
                </div><!-- /.products-carousel__next -->

                <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
                <!-- /.products-pagination -->
            </div><!-- /.position-relative -->

        </section><!-- /.products-carousel container -->
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.star-rating__star-icon');
        const ratingInput = document.getElementById('form-input-rating');

        stars.forEach(star => {
            star.addEventListener('click', () => {
                const rating = star.getAttribute('data-value');
                ratingInput.value = rating;

                stars.forEach(s => {
                    const val = s.getAttribute('data-value');
                    s.setAttribute('fill', val <= rating ? '#FFD700' : '#ccc');
                });
            });
        });
    });

    function handleShare() {
        if (navigator.share) {
            navigator.share({
                    title: document.title,
                    text: 'Check this out!',
                    url: window.location.href,
                })
                .then(() => console.log('Shared successfully'))
                .catch((error) => console.error('Error sharing:', error));
        } else {
            alert('Web Share API not supported in this browser.');
        }
    }
</script>
<?php /**PATH C:\Users\hp\Desktop\ECOMSELLER\resources\views/details.blade.php ENDPATH**/ ?>