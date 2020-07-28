<?php define("INITPHP","../../private/initialize.php"); ?>
<?php require_once(INITPHP); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <!-- work because we used a relative path (no / at beginning)-->
      <li><a href=" <?php echo url_for('/staff/subjects/index.php');
      ?>">Subjects</a>

      </li>
      <li><a href=" <?php echo url_for('/staff/pages/index.php');
      ?>">Pages</a>

      </li>
    </ul>
  </div>
</div>


<?php include(SHARED_PATH . '/staff_footer.php');?>
