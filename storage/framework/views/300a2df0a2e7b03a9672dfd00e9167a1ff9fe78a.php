<div class="row justify-content-center mt-5">
  <div class="col-12">
    <div class="card shadow  text-white bg-dark">
      <div class="card-header">Coding Challenge - Network connections</div>
      <div class="card-body">
        <div class="btn-group w-100 mb-3" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio"  <?php if(isset($suggest)): ?>
             value="<?php echo e($suggest); ?>"
            <?php endif; ?> id="btnradio1"  autocomplete="off" onclick="getSuggestions()" checked >
          <label class="btn btn-outline-primary" for="btnradio1" id="get_suggestions_btn">Suggestions (<?php if(isset($suggest)): ?>
            <?php echo e($suggest); ?>

            <?php endif; ?> ) </label>

          <input type="radio" class="btn-check" name="btnradio" <?php if(isset($requested)): ?>
             value="<?php echo e($requested); ?>"
            <?php endif; ?> id="btnradio2" autocomplete="off"  onclick="getsendRequests('sent')">
          <label class="btn btn-outline-primary" for="btnradio2" id="get_sent_requests_btn">Sent Requests (<?php if(isset($requested)): ?>
          <?php echo e($requested); ?>

          <?php endif; ?> )</label>

          <input type="radio" class="btn-check" name="btnradio" <?php if(isset($received)): ?>
             value="<?php echo e($received); ?>"
            <?php endif; ?>  id="btnradio3" autocomplete="off"  onclick="getRecieveRequests('Received')">
          <label class="btn btn-outline-primary" for="btnradio3" id="get_received_requests_btn">Received
            Requests(<?php if(isset($received)): ?>
            <?php echo e($received); ?>

            <?php endif; ?> )</label>

          <input type="radio" class="btn-check" name="btnradio" <?php if(isset($connected)): ?>
             value="<?php echo e($connected); ?>"
            <?php endif; ?> id="btnradio4" autocomplete="off" onclick="getConnections()">
          <label class="btn btn-outline-primary" for="btnradio4" id="get_connections_btn"  >Connections (<?php if(isset($connected)): ?>
            <?php echo e($connected); ?>

            <?php endif; ?> )</label>
        </div>
        <hr>
        <div id="content" class="">    
        
        </div>
           
        <div id="skeleton" class="d-none">
          <?php for($i = 0; $i < 10; $i++): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.skeleton','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('skeleton'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
          <?php endfor; ?>
        </div>
       

        <!-- <span class="fw-bold">"Load more"-Button</span> -->
        <!-- <div class="d-flex justify-content-center mt-2 py-3 " id="load_more_btn_parent">
          <button class="btn btn-primary" onclick="" id="load_more_btn">Load more</button>
        </div> -->
      </div>
    </div>
  </div>
</div>



<!-- <div id="connections_in_common_skeleton" class="">
  <br>
  <span class="fw-bold text-white">Loading Skeletons</span>
  <div class="px-2">
    <?php for($i = 0; $i < 10; $i++): ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.skeleton','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('skeleton'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endfor; ?>
  </div>
</div> -->
<?php /**PATH C:\xampp\htdocs\curawork-coding-challenge (1)\curawork-coding-challenge\resources\views/components/network_connections.blade.php ENDPATH**/ ?>