<?php
// defined base point we can base all our URLS off of
  function url_for($script_path) {
// add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;

  }


?>
