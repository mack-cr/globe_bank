<?php require_once('../../../private/initialize.php'); ?>


<?php $page_title = 'View Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>



<?php
$id = $_GET['id'] ?? '0';

echo h($id);



 ?>


 <?php include(SHARED_PATH . '/staff_footer.php'); ?>
