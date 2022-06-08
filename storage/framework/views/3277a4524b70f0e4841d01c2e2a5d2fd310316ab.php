<?php $__env->startSection('content'); ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo e(asset('js/helper.js')); ?>?v=<?php echo e(time()); ?>" defer></script>
  <script src="<?php echo e(asset('js/main.js')); ?>?v=<?php echo e(time()); ?>" defer></script>

  <div class="container">
  
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.network_connections','data' => ['suggest' => $suggest,'requested' => $requested,'connected' => $connected,'received' => $received]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('network_connections'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['suggest' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($suggest),'requested' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($requested),'connected' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($connected),'received' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($received)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curawork-coding-challenge (1)\curawork-coding-challenge\resources\views/home.blade.php ENDPATH**/ ?>