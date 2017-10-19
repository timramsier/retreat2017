<?php
include 'sql/sql.init.php';
//============================================================
//				Create connection credentials
//============================================================

$db_host = getenv(RDS_HOSTNAME) ?: 'localhost';
$db_name = getenv(RDS_DB_NAME) ?: 'IAC_retreat';
$db_user = getenv(RDS_USERNAME) ?: 'secUser';
$db_password = getenv(RDS_PASSWORD) ?: 'eKcGZr59zAa2BEWU';
//Create mysqli object
//============================================================

$mysqli= new mysqli($db_host,$db_user,$db_password,$db_name);


//============================================================
//Error Handler
//============================================================

if($mysqli->connect_error){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

foreach ($sql_init as $key => $query) {
	if(!$mysqli->query($query)) {
		printf("Initialization failed: %s\n", $mysqli->connect_error);
		printf($query);
		exit();
	}
}
// die();
