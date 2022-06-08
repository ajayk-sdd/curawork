<div class="my-2 shadow text-white bg-dark p-1" id="">
  <div class="d-flex justify-content-between">
    <table class="ms-1">
   
      <td class="align-middle"><?php echo e($name); ?></td>
      <td class="align-middle"> - </td>
      <td class="align-middle"><?php echo e($email); ?>

    </table>
    <div>
      <?php if($mode == 'sent'): ?>
        <button id="cancel_request_btn_" class="btn btn-danger me-1"
          onclick="deleteRequest(<?php echo $id; ?>)">Withdraw Request</button>
      <?php else: ?>
        <button id="accept_request_btn_" class="btn btn-primary me-1"
        onclick="acceptRequest(<?php echo $id; ?>)">Accept</button>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php /**PATH /var/www/html/curawork-coding-challenge (2)/curawork-coding-challenge (1)/curawork-coding-challenge/resources/views/components/request.blade.php ENDPATH**/ ?>