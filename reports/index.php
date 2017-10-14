<?php
	include "../config/paths.php";
	include "../config/database.php";
  include "./queries.php";
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../public/css/report.css" ?>
  </head>
  <body>
    <div class="report-menu">
      <ul>
        <?php
          foreach ($queryList as $key => $query) {
            echo "<li><a href='report.php?data=".$key."'>".$key."</a></li>";
          }
        ?>
      </ul>
    </div>
  </body>
</html>