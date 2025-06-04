<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'E.COM.SELLER','bodyClass' => 'gradient-bg']); ?>
    <main>
        <section class="swiper-container js-swiper-slider swiper-number-pagination slideshow"
            data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true
      }'>
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="overflow-hidden position-relative h-100">
                            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                                <img loading="lazy" src="<?php echo e(asset('storage/uploads/slides/' . $slide->image)); ?>"
                                    width="542" height="733" alt="Woman Fashion 1"
                                    class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto" />
                                <div class="character_markup type2">
                                    <p
                                        class="text-uppercase font-sofia mark-grey-color animate animate_fade animate_btt animate_delay-10 mb-0">
                                        <?php echo e($slide->tagline); ?></p>
                                </div>
                            </div>
                            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                                <h6
                                    class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
                                    New Arrivals</h6>
                                <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">
                                    <?php echo e($slide->title); ?></h2>
                                <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">
                                    <?php echo e($slide->subtitle); ?></h2>
                                <a href="<?php echo e($slide->link); ?>"
                                    class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="container">
                <div
                    class="slideshow-pagination slideshow-number-pagination d-flex align-items-center position-absolute bottom-0 mb-5">
                </div>
            </div>
        </section>
        <div class="container mw-1620 bg-white border-radius-10">
            <div class="mb-3 mb-xl-5 pt-1 pb-4" id="category"></div>
            <section class="category-carousel container">
                <h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4" >You Might Like</h2>

                <div class="position-relative">
                    <div class="swiper-container js-swiper-slider"
                        data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 8,
              "slidesPerGroup": 1,
              "effect": "none",
              "loop": true,
              "navigation": {
                "nextEl": ".products-carousel__next-1",
                "prevEl": ".products-carousel__prev-1"
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 2,
                  "spaceBetween": 15
                },
                "768": {
                  "slidesPerView": 4,
                  "slidesPerGroup": 4,
                  "spaceBetween": 30
                },
                "992": {
                  "slidesPerView": 6,
                  "slidesPerGroup": 1,
                  "spaceBetween": 45,
                  "pagination": false
                },
                "1200": {
                  "slidesPerView": 8,
                  "slidesPerGroup": 1,
                  "spaceBetween": 60,
                  "pagination": false
                }
              }
            }'>
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <img loading="lazy" class="w-32 h-32 object-cover rounded mb-3"
                                        src="<?php echo e(asset('storage/uploads/categories/' . $category->image)); ?>"
                                        width="128" height="128" alt="<?php echo e($category->name ?? 'Category Image'); ?>" />

                                    <div class="text-center">
                                        <a href="<?php echo e(route('shop.index', ['categories' => $category->id])); ?>"
                                            class="menu-link fw-medium"><?php echo e($category->name); ?></a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div><!-- /.swiper-wrapper -->
                    </div><!-- /.swiper-container js-swiper-slider -->

                    <div
                        class="products-carousel__prev products-carousel__prev-1 position-absolute top-50 d-flex align-items-center justify-content-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_prev_md" />
                        </svg>
                    </div><!-- /.products-carousel__prev -->
                    <div
                        class="products-carousel__next products-carousel__next-1 position-absolute top-50 d-flex align-items-center justify-content-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_next_md" />
                        </svg>
                    </div><!-- /.products-carousel__next -->
                </div><!-- /.position-relative -->
            </section>

            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

            <section class="hot-deals container">
                <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4" id="newArrival">Hot Deals</h2>
                <div class="row">
                    <div
                        class="col-md-6 col-lg-4 col-xl-20per d-flex align-items-center flex-column justify-content-center py-4 align-items-md-start">
                        <h2>Summer Sale</h2>
                        <h2 class="fw-bold">Up to 60% Off</h2>

                        <div class="position-relative d-flex align-items-center text-center pt-xxl-4 js-countdown mb-3"
                            data-date="18-3-2024" data-time="06:50">
                            <div class="day countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Days</span>
                            </div>

                            <div class="hour countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Hours</span>
                            </div>

                            <div class="min countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Mins</span>
                            </div>

                            <div class="sec countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Sec</span>
                            </div>
                        </div>

                        <a href="<?php echo e(route('shop.index')); ?>"
                            class="btn-link default-underline text-uppercase fw-medium mt-3">View
                            All</a>
                    </div>
                    <div class="col-md-6 col-lg-8 col-xl-80per">
                        <div class="position-relative">
                            <div class="swiper-container js-swiper-slider"
                                data-settings='{
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 4,
                  "slidesPerGroup": 4,
                  "effect": "none",
                  "loop": false,
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 2,
                      "slidesPerGroup": 2,
                      "spaceBetween": 14
                    },
                    "768": {
                      "slidesPerView": 2,
                      "slidesPerGroup": 3,
                      "spaceBetween": 24
                    },
                    "992": {
                      "slidesPerView": 3,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    },
                    "1200": {
                      "slidesPerView": 4,
                      "slidesPerGroup": 1,
                      "spaceBetween": 30,
                      "pagination": false
                    }
                  }
                }'>
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $sproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide product-card product-card_style3">
                                            <div class="pc__img-wrapper">
                                                <a
                                                    href="<?php echo e(route('shop.product.details', ['product_slug' => $sproduct->slug])); ?>">
                                                    <img loading="lazy"
                                                        src="<?php echo e(asset('storage/uploads/products/thumbnails/' . $sproduct->image)); ?>"
                                                        width="258" height="313" alt="<?php echo e($sproduct->name); ?>"
                                                        class="pc__img" />
                                                </a>
                                            </div>

                                            <div class="pc__info position-relative">
                                                <h6 class="pc__title"><a
                                                        href="<?php echo e(route('shop.product.details', ['product_slug' => $sproduct->slug])); ?>"><?php echo e($sproduct->name); ?></a>
                                                </h6>
                                                <div class="product-card__price d-flex">
                                                    <span class="money price text-secondary">
                                                        <?php if($sproduct->sale_price): ?>
                                                            <s>₹<?php echo e($sproduct->regular_price); ?></s>
                                                            ₹<?php echo e($sproduct->sale_price); ?>

                                                        <?php else: ?>
                                                            ₹<?php echo e($sproduct->regular_price); ?>

                                                        <?php endif; ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div><!-- /.swiper-wrapper -->
                            </div><!-- /.swiper-container js-swiper-slider -->
                        </div><!-- /.position-relative -->
                    </div>
                </div>
            </section>

            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

            <section class="category-banner container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="category-banner__item border-radius-10 mb-5">
                            <img loading="lazy" class="h-auto"
                                src="https://www.adilqadri.com/cdn/shop/files/SHANAYABOXandbottle5.5MLwhite.jpg?v=1731340134&width=400" width="690"
                                height="665" alt="" />
                                
                            <div class="category-banner__item-mark">
                                Starting at ₹399
                            </div>
                            <div class="category-banner__item-content">
                                <h3 class="mb-0">Blazers</h3>
                                <a href="#" class="btn-link default-underline text-uppercase fw-medium">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-banner__item border-radius-10 mb-5">
                            <img loading="lazy" class="h-auto"
                                src="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/c2cb718724e945e6bbc211e01f2e1913_9366/adidas_Switch_Fwd_2_Running_Shoes_Grey_IE5885_01_00_standard.jpg" width="690"
                                height="665" alt="" />
                            <div class="category-banner__item-mark">
                                Starting at ₹1,999
                            </div>
                            <div class="category-banner__item-content">
                                <h3 class="mb-0">Sportswear</h3>
                                <a href="#" class="btn-link default-underline text-uppercase fw-medium">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

            <section class="products-grid container">
                <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">Featured Products</h2>

                <div class="row">
                    <?php $__currentLoopData = $fproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                                <div class="pc__img-wrapper">
                                    <a
                                        href="<?php echo e(route('shop.product.details', ['product_slug' => $fproduct->slug])); ?>">
                                        <img loading="lazy"
                                            src="<?php echo e(asset('storage/uploads/products/thumbnails/' . $fproduct->image)); ?>"
                                            width="330" height="400" alt="<?php echo e($fproduct->name); ?>"
                                            class="pc__img">
                                    </a>
                                </div>

                                <div class="pc__info position-relative">
                                    <h6 class="pc__title"><a
                                            href="<?php echo e(route('shop.product.details', ['product_slug' => $fproduct->slug])); ?>"><?php echo e($fproduct->name); ?></a>
                                    </h6>
                                    <div class="product-card__price d-flex align-items-center">
                                        <span class="money price text-secondary">
                                            <?php if($fproduct->sale_price): ?>
                                                <s>₹<?php echo e($fproduct->regular_price); ?></s>
                                                ₹<?php echo e($fproduct->sale_price); ?>

                                            <?php else: ?>
                                                ₹<?php echo e($fproduct->regular_price); ?>

                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div><!-- /.row -->

                <div class="text-center mt-2">
                    <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="#">Load
                        More</a>
                </div>
            </section>
        </div>

        <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

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
<?php /**PATH C:\Users\hp\Desktop\ECOMSELLER\resources\views/home/index.blade.php ENDPATH**/ ?>