<div class="my-2 shadow  text-white bg-dark p-1" id="">
  <div class="d-flex justify-content-between">
    <table class="ms-1">
     
      <td class="align-middle"> <?php echo $name; ?></td>
      <td class="align-middle"> - </td>
      <td class="align-middle"><?php echo $email; ?></td>
      <td class="align-middle"> - </td>
      <td class="align-middle"><?php echo $id; ?></td>
      
    </table>
    <div>
      <button id="create_request_btn_" class="btn btn-primary me-1" onclick="sendRequest(<?php echo $id; ?>,<?php echo $id; ?>)" >Connect</button>
    </div>
  </div>
</div>
<?php /**PATH /var/www/html/curawork-coding-challenge/resources/views/components/suggestion.blade.php ENDPATH**/ ?>