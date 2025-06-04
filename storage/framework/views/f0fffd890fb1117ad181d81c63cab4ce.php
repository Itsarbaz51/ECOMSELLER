<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'register']); ?>
    <style>
        @media (min-width: 1024px) {
            .containerRegister {
                margin: 0 300px;
            }

            .formRegister-1 {
                margin: 0 50px;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 10px;
            }

            .formRegister-2 {
                margin: 0 50px;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .regterbtn {
                width: calc(100% - 100px);
                margin-left: 50px;
            }

        }
    </style>

    <div class="containerRegister mt-5 " style="margin: 0 18px;">
        <h3 class="mb-4">Register</h3>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger"><?php echo e(implode(', ', $errors->all())); ?></div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="formRegister-1">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" required value="<?php echo e(old('name')); ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" required value="<?php echo e(old('email')); ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input name="mobile" type="text" class="form-control" required maxlength="10"
                        value="<?php echo e(old('mobile')); ?>">
                </div>
            </div>

            <div class="formRegister-2">
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary regterbtn">Register</button>
        </form>
    </div>
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
<?php /**PATH C:\Users\hp\Desktop\ECOMSELLER\resources\views/auth/register.blade.php ENDPATH**/ ?>