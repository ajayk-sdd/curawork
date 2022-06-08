<div class="my-2 shadow text-white bg-dark p-1" id="">
  <div class="d-flex justify-content-between">
    <table class="ms-1">
      
      <td class="align-middle"><?php if(isset($name)): ?>
      <?php echo e($name); ?>

      <?php endif; ?>
      </td>
      <td class="align-middle"> - </td>
      <td class="align-middle"><?php if(isset($email)): ?>
      <?php echo e($email); ?>

      <?php endif; ?>
      
    </table>
    <div>
      <button style="width: 220px" id="get_connections_in_common_" class="btn btn-primary" type="button"
        data-bs-toggle="collapse"  data-bs-target="#collapse_<?php echo e($name); ?>" aria-expanded="false" aria-controls="collapseExample" <?php if(isset($connected_id)): ?>
      onclick="getConnectionsInCommon( <?php echo e($connected_id); ?>)"
      <?php endif; ?>>
        Connections in common (
          <?php if(isset($common)): ?>
          <?php echo e($common); ?>

          <?php endif; ?>
        )
      </button>
      <button id="create_request_btn_" class="btn btn-danger me-1"<?php if(isset($id)): ?>
      onclick="removeConnection( <?php echo e($id); ?>)"
      <?php endif; ?> >Remove Connection</button>
    </div>

  </div>
  <div class="collapse" id="collapse_<?php echo e($name); ?>">

    <div id="content_<?php echo e($connected_id); ?>" class="p-2">
      
     
    </div>
    <div id="connections_in_common_skeletons_">
      
    </div>
    <!-- <div class="d-flex justify-content-center w-100 py-2">
      <button class="btn btn-sm btn-primary" id="load_more_connections_in_common_">Load
        more</button>
    </div> -->
  </div>
</div>
<?php /**PATH /var/www/html/curawork-coding-challenge (2)/curawork-coding-challenge (1)/curawork-coding-challenge/resources/views/components/connection.blade.php ENDPATH**/ ?>