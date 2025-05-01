<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Product Details']); ?>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .product-page {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            display: flex;
            gap: 40px;
        }

        .product-image {
            flex: 1;
            max-width: 500px;
        }

        .product-image img {
            width: 100%;
            border: 1px solid #ddd;
            padding: 10px;
            /* background-color: #fff; */
        }

        .product-info {
            flex: 2;
        }

        .product-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-rating {
            color: #FFA41C;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .product-price {
            font-size: 22px;
            color: #B12704;
            margin-bottom: 20px;
        }

        .product-price del {
            color: #565959;
            margin-left: 10px;
            font-size: 16px;
        }

        .short-description, .full-description, .product-meta {
            margin-bottom: 20px;
        }

        .product-meta p {
            margin: 5px 0;
        }

        .print-button {
            background-color: #f0c14b;
            border: 1px solid #a88734;
            color: #111;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 20px;
        }

        .print-button:hover {
            background-color: #e2b33c;
        }
    </style>

    <main>
        <section class="product-page">
            <div class="product-image">
                <img src="<?php echo e(asset('storage/uploads/products/thumbnails/' . $product->image)); ?>"
                    alt="<?php echo e($product->name); ?>">
            </div>

            <div class="product-info">
                <div class="product-title"><?php echo e($product->name); ?></div>

                <div class="product-rating">
                    ★★★★☆ (8k+ reviews)
                </div>

                <div class="product-price">
                    <?php if($product->sale_price): ?>
                        ₹<?php echo e($product->sale_price); ?> <del>₹<?php echo e($product->regular_price); ?></del>
                    <?php else: ?>
                        ₹<?php echo e($product->regular_price); ?>

                    <?php endif; ?>
                </div>

                <div class="short-description">
                    <strong>Short Description:</strong>
                    <p><?php echo e($product->short_description); ?></p>
                </div>

                <div class="full-description">
                    <strong>Product Description:</strong>
                    <p style="white-space: pre-wrap;"><?php echo e($product->description); ?></p>
                </div>

                <div class="product-meta">
                    <p><strong>SKU:</strong> <?php echo e($product->SKU); ?></p>
                    <p><strong>Category:</strong> <?php echo e($product->category->name); ?></p>
                    <p><strong>Tags:</strong> N/A</p>
                </div>

                <button class="print-button" onclick="window.print()">Print this page</button>
            </div>
        </section>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $attributes = $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php /**PATH C:\Users\itsar\Desktop\project\e-commerce\resources\views/admin/product-show.blade.php ENDPATH**/ ?>