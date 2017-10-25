<?php
include 'database.php';
include 'sql/sql.init.2017.php';

foreach ($sql_init as $key => $query) {
	if(!$mysqli->query($query)) {
		printf("Initialization failed: %s\n", $mysqli->connect_error);
		printf($query);
		exit();
	}
}