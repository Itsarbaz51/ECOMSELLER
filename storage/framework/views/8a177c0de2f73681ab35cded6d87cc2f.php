<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Contact-us']); ?>
    <style>
        .text-danger {
            color: red !important;
        }
    </style>
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="contact-us container">
            <div class="mw-930">
                <h2 class="page-title">CONTACT US</h2>
            </div>
        </section>

        <hr class="mt-2 text-secondary " />
        <div class="mb-4 pb-4"></div>

        <section class="contact-us container">
            <div class="mw-930">
                <div class="contact-us__form">
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php endif; ?>
                    <form name="contact-us-form" class="needs-validation" novalidate="" method="POST"
                        action="<?php echo e(route('home.contact.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <h3 class="mb-5">Get In Touch</h3>
                        <div class="form-floating my-4">
                            <input type="text" class="form-control" name="name" placeholder="Name *"
                                required="" value="<?php echo e(old('name')); ?>" />
                            <label for="contact_us_name">Name *</label>
                        </div>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-floating my-4">
                            <input type="text" class="form-control" name="phone" placeholder="Phone *"
                                required="" value="<?php echo e(old('phone')); ?>" />
                            <label for="contact_us_name">Phone *</label>
                        </div>
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-floating my-4">
                            <input type="email" class="form-control" name="email" placeholder="Email address *"
                                required="" value="<?php echo e(old('email')); ?>" />
                            <label for="contact_us_name">Email address *</label>
                        </div>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="my-4">
                            <textarea class="form-control form-control_gray" name="comment" placeholder="Your Message" cols="30" rows="8"
                                required=""><?php echo e(old('comment')); ?></textarea>
                        </div>
                        <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="my-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
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
<?php /**PATH C:\Users\itsar\Desktop\project\e-commerce\resources\views/home/contact.blade.php ENDPATH**/ ?>