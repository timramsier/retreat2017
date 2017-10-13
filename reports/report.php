<?php
	include "../config/database.php";
  include "./queries.php";

	$query = $queryList['main'];
	$result = $mysqli->query($query);
	// $array = $result->fetch_assoc();

	echo "<table class='report-table'>";
	while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    foreach ($row as $value)
    {
      echo "<td>".$value."</td>";
    }
    echo "</tr>";
	}
	echo "</table>";
?>
<style>
	.report-table tr:first-of-type {
		font-weight: 600;
	}
</style>