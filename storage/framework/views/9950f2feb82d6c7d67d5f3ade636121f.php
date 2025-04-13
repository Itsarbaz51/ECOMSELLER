<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Order Tracking']); ?>

    <div class="max-w-lg mx-auto mt-10">
        <?php if(session('error')): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('track')); ?>" method="GET" class="space-y-4 p-6">
            <h2 class="text-xl font-semibold">Track Your Order</h2>
            <input type="number" name="order_id" placeholder="Enter Order ID"
                   class="border border-gray-300 p-2 rounded w-full" required>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Track</button>
        </form>

        <?php if(session('order')): ?>
            <?php $order = session('order'); ?>
            <div class="mt-6 bg-white shadow p-4 rounded">
                <h3 class="text-lg font-semibold mb-2">Order Details</h3>
                <p><strong>Status:</strong> <?php echo e($order->status); ?></p>
                <?php if($order->status == 'delivered'): ?>
                    <p><strong>Delivered on:</strong> <?php echo e($order->delivery_date); ?></p>
                <?php elseif($order->status == 'cancelled'): ?>
                    <p><strong>Cancelled on:</strong> <?php echo e($order->cancelled_date); ?></p>
                <?php endif; ?>

                <div class="mt-4">
                    <h4 class="font-medium">Shipping Address</h4>
                    <p><?php echo e($order->name); ?>, <?php echo e($order->phone); ?></p>
                    <p><?php echo e($order->address); ?>, <?php echo e($order->city); ?>, <?php echo e($order->state); ?></p>
                    <p><?php echo e($order->country); ?> - <?php echo e($order->zip); ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>

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
<?php /**PATH C:\Users\itsar\Desktop\e-commerce\resources\views/admin/order-tracking.blade.php ENDPATH**/ ?>