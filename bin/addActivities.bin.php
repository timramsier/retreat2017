<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";



// Builds the queries for the activity sections dynamically
if (isset($_POST["choice1"]) && $_POST["choice1"] !== "null") {
	// Choice Number 1 query
	$choice1 			= $_POST["choice1"] + 1;
	$query 				= "SELECT * FROM activity_key WHERE key_id = '$choice1'";
	$data_array 	= $mysqli->query($query);
	$choiceInfo1 	= $data_array->fetch_assoc();
	$queryArray[] = createQuery("activity_".$choiceInfo1['key_alias'],searchArray($_POST,$choiceInfo1["key_alias"]."_"),$mysqli);
} else {
	$choice1 = 0;
}

if (isset($_POST["choice2"]) && $_POST["choice2"] !== "null") {
	// Choice Number 2 query
	$choice2 			= $_POST["choice2"] + 1;
	$query 				= "SELECT * FROM activity_key WHERE key_id = '$choice2'";
	$data_array 	= $mysqli->query($query);
	$choiceInfo2 	= $data_array->fetch_assoc();
	$queryArray[] = createQuery("activity_".$choiceInfo2['key_alias'],searchArray($_POST,$choiceInfo2["key_alias"]."_"),$mysqli);
} else {
	$choice2 = 0;
}



if (isset($_POST["choice3"]) && $_POST["choice3"] !== "null") {
	// Choice Number 3 query
	$choice3 			= $_POST["choice3"] + 1;
	$query 				= "SELECT * FROM activity_key WHERE key_id = '$choice3'";
	$data_array 	= $mysqli->query($query);
	$choiceInfo3 	= $data_array->fetch_assoc();
	$queryArray[] = createQuery("activity_".$choiceInfo3['key_alias'],searchArray($_POST,$choiceInfo3["key_alias"]."_"),$mysqli);
}
else {
	$choice3 = 0;
}


//main query
$table 					= "activity_main";
$hashKey				= $_POST["hashKey"];
$userAgent			= $_POST["userAgent"];
$userIP					= $_POST["userIP"];
$userFirstName 	= $_POST["userFirstName"];
$userLastName 	= $_POST["userLastName"];

if (isset($_POST["morning"])) 	{ $morning 		= $_POST["morning"]; 		} else { $morning 	= ""; }
if (isset($_POST["midDay"])) 		{ $midDay 		= $_POST["midDay"]; 		} else { $midDay 		= ""; }
if (isset($_POST["afternoon"])) { $afternoon 	= $_POST["afternoon"]; 	} else { $afternoon = ""; }

$queryArray[] = "INSERT INTO $table (hashKey,userAgent,userIP,userFirstName,userLastName,choice1,choice2,choice3,morning,midDay,afternoon)
									VALUES ('$hashKey','$userAgent','$userIP','$userFirstName','$userLastName','$choice1','$choice2','$choice3','$morning','$midDay','$afternoon')
								";

// echo "<pre>";
// print_r($queryArray);
// echo "</pre>";die();


$success = TRUE;
foreach ($queryArray as $key => $query) {
	// echo $query;
	if (!$mysqli->query($query)) {
			$errorQuery = str_replace('\r\n', '',$mysqli->real_escape_string("MySQL error $mysqli->error <br> Query:<br> $query"));
			$queryError = "INSERT INTO activity_failed (failed_user,failed_query) VALUES ('$hashKey','$errorQuery')";
			// echo $queryError;die();
			$errorRes = $mysqli->query($queryError);
	    $success = FALSE;
	}
}

if ($success) {
	header('Location: ?view=complete&result=done');
}
else
{
	header('Location: ?view=complete&result=failure');
}
