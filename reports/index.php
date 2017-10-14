<?php
	include "../config/paths.php";
	include "../config/database.php";
  include "./queries.php";
?>

<?php 
  foreach ($queryList as $key => $query) {
    echo $key;
  }
?>
