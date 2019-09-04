<?php
    if(isset($_SESSION["grade_message_success"])){
?>
<div class="alert alert-success alert-dismissable text-center">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
   <?php echo $_SESSION["grade_message_success"]; ?>
</div>

<?php
    }
?>

<?php
    if(isset($_SESSION["grade_message_error"])){
?>
<div class="alert alert-danger alert-dismissable text-center">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
   <?php echo $_SESSION["grade_message_error"]; ?>
</div>

<?php
    }
?>

