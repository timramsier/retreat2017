<?php
	include "../config/database.php";
  include "./queries.php";

	$query = $queryList['main'];
	$result = $mysqli->query($query);
	// $array = $result->fetch_assoc();

	echo "<table>";
	while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    foreach ($row as $value)
    {
      echo "<td>".$value."</td>";
    }
    echo "</tr>";
	}
	echo "</table>";
	// $result = $data_array->fetch_assoc();
// echo "this is working";
// echo "<pre>";
// print_r($result);
// print_r($array);
// echo "</pre>";
// die();
