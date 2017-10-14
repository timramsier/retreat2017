<?php
	include "../config/paths.php";
	include "../config/database.php";
  include "./queries.php";
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../public/css/report.css" >
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="report-menu">
      <h1>Reports:</h1>
      <div class="tiles">
        <?php
          foreach ($queryList as $key => $query) {
            echo "<a class='tile' href='report.php?data="
            .$key.
            "'><center><i class='fa fa-3 fa-th-list' aria-hidden='true'></i></center><h2>"
            .$key.
            "</h2><p>"
            .$descriptionList[$key].
            "</p></a>";
          }
        ?>
      </div>
    </div>
  </body>
</html>