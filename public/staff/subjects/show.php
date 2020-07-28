<?php require_once('../../../private/initialize.php'); ?>


<?php

$id = $_GET['id'] ?? '0';

echo h($id);

 ?>


<a href="show.php?name=<?php echo u('Chante Mack'); ?>">Link</a><br/>
<a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br/>
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br/>
