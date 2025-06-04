<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Cart']); ?>
    <style>
        .success {
            color: #278c04 !important;
        }

        .error {
            color: #ff0000 !important;
        }
    </style>
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Cart</h2>
            <div class="checkout-steps">
                <a href="javascript:void(0)" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Shopping Bag</span>
                        <em>Manage Your Items List</em>
                    </span>
                </a>
                <a href="javascript:void(0)" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">02</span>
                    <span class="checkout-steps__item-title">
                        <span>Shipping and Checkout</span>
                        <em>Checkout Your Items List</em>
                    </span>
                </a>
                <a href="javascript:void(0)" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">03</span>
                    <span class="checkout-steps__item-title">
                        <span>Confirmation</span>
                        <em>Review And Submit Your Order</em>
                    </span>
                </a>
            </div>
            <div class="shopping-cart">
                <?php if($items->count() > 0): ?>
                    <div class="cart-table__wrapper">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th></th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <div class="shopping-cart__product-item">
                                                <img loading="lazy"
                                                    src="<?php echo e(asset('storage/uploads/products/thumbnails/' . $item->model->image)); ?>"
                                                    width="120" height="120" alt="<?php echo e($item->name); ?>" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="shopping-cart__product-item__detail">
                                                <h4><?php echo e($item->name); ?></h4>
                                                <ul class="shopping-cart__product-item__options">
                                                    <li>Color: Yellow</li>
                                                    <li>Size: L</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="shopping-cart__product-price">₹<?php echo e($item->price); ?></span>
                                        </td>
                                        <td>
                                            <div class="qty-control position-relative">
                                                <input type="number" name="quantity" value="<?php echo e($item->qty); ?>"
                                                    min="1" class="qty-control__number text-center">
                                                <form
                                                    action="<?php echo e(route('cart.qty.decrease', ['rowId' => $item->rowId])); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="qty-control__reduce">-</div>
                                                </form>

                                                <form
                                                    action="<?php echo e(route('cart.qty.increase', ['rowId' => $item->rowId])); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="qty-control__increase">+</div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="shopping-cart__subtotal">₹<?php echo e($item->subTotal()); ?></span>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('cart.item.remove', ['rowId' => $item->rowId])); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <a href="javascript:void(0)" class="remove-cart">
                                                    <svg width="10" height="10" viewBox="0 0 10 10"
                                                        fill="#767676" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                                                        <path
                                                            d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                                                    </svg>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="cart-table-footer">
                            <?php if(!Session::has('coupon')): ?>
                                <form action="<?php echo e(route('cart.coupon.apply')); ?>" method="POST"
                                    class="position-relative bg-body">
                                    <?php echo csrf_field(); ?>
                                    <input class="form-control" type="text" name="coupon_code"
                                        placeholder="Coupon Code"
                                        value="" />
                                    <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4"
                                        type="submit" value="APPLY COUPON">
                                </form>
                            <?php else: ?>
                                <form action="<?php echo e(route('cart.coupon.remove')); ?>" method="POST"
                                    class="position-relative bg-body">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <input class="form-control" type="text" name="coupon_code"
                                        placeholder="Coupon Code"
                                        value="<?php if(Session::has('coupon')): ?> <?php echo e(Session::get('coupon')['code']); ?> Applied! <?php endif; ?>" />
                                    <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4"
                                        type="submit" value="REMOVE COUPON">
                                </form>
                            <?php endif; ?>
                            <form action="<?php echo e(route('cart.empty')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-light" type="submit">CLEAR CART</button>
                            </form>
                        </div>
                        <div>
                            <?php if(Session::has('success')): ?>
                                <p class="text-success success">
                                    <?php echo e(Session::get('success')); ?>

                                </p>
                            <?php elseif(Session::has('error')): ?>
                                <p class="text-danger error">
                                    <?php echo e(Session::get('error')); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="shopping-cart__totals-wrapper">
                        <div class="sticky-content">
                            <div class="shopping-cart__totals">
                                <h3>Cart Totals</h3>
                                <table class="cart-totals">
                                    <tbody>
                                        <?php if(Session::has('discount')): ?>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>₹<?php echo e(Cart::instance('cart')->subtotal()); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Discount <?php echo e(Session::get('coupon')['code']); ?></th>
                                                <td>₹<?php echo e(Session::get('discount')['discount']); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Subtotal After Discount</th>
                                                <td>₹<?php echo e(Session::get('discount')['subtotal']); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td>
                                                    Free
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>VAT</th>
                                                <td>₹<?php echo e(Session::get('discount')['tax']); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td>₹<?php echo e(Session::get('discount')['total']); ?></td>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>₹<?php echo e(Cart::instance('cart')->subtotal()); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td>
                                                    Free
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>VAT</th>
                                                <td>₹<?php echo e(Cart::instance('cart')->tax()); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td>₹<?php echo e(Cart::instance('cart')->total()); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mobile_fixed-btn_wrapper">
                                <div class="button-wrapper container">
                                    <a href="<?php echo e(route('cart.checkout')); ?>" class="btn btn-primary btn-checkout">PROCEED TO
                                        CHECKOUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="cal-md-12 text-center pt-5 bp-5">
                        <p>No item found in your cart</p>
                        <a href="<?php echo e(route('shop.index')); ?>" class="btn btn-info">Shop Now</a>
                    </div>
                <?php endif; ?>
            </div>
        </section>
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
    $(function() {
        $('.qty-control__increase').on('click', function() {
            $(this).closest('form').submit();
        });

        $('.qty-control__reduce').on('click', function() {
            $(this).closest('form').submit();
        });

        $('.remove-cart').on('click', function() {
            $(this).closest('form').submit();
        });
    })
</script>
<?php /**PATH C:\Users\itsar\Desktop\project\e-commerce\resources\views/cart.blade.php ENDPATH**/ ?>