<?php

include $PATH['CONFIG']."database.php";

// echo "<pre><code>";
// print_r($_POST);
// echo "</code></pre>";
// die();

$validated = TRUE;

if(isset($_POST['attending']) && $_POST['attending'] != ''){
    $attending = $mysqli->real_escape_string($_POST['attending']);
} else {
	$validated = FALSE;
}
if(isset($_POST['firstName']) && $_POST['firstName'] != ''){
    $firstName = $mysqli->real_escape_string($_POST['firstName']);
} else {
	$validated = FALSE;
}
if(isset($_POST['lastName']) && $_POST['lastName'] != ''){
    $lastName = $mysqli->real_escape_string($_POST['lastName']);
} else {
	$validated = FALSE;
}
if(isset($_POST['company']) && $_POST['company'] != ''){
    $company = $mysqli->real_escape_string($_POST['company']);
} else {
	$validated = FALSE;
}
if(isset($_POST['title']) && $_POST['title'] != ''){
    $title = $mysqli->real_escape_string($_POST['title']);
} else {
	$validated = FALSE;
}
if(isset($_POST['officePhone']) && $_POST['officePhone'] != ''){
    $officePhone = $mysqli->real_escape_string($_POST['officePhone']);
} else {
	$validated = FALSE;
}
if(isset($_POST['mobilePhone']) && $_POST['mobilePhone'] != ''){
    $mobilePhone = $mysqli->real_escape_string($_POST['mobilePhone']);
} else {
	$validated = FALSE;
}
if(isset($_POST['email']) && $_POST['email'] != ''){
    $email = $mysqli->real_escape_string($_POST['email']);
} else {
	$validated = FALSE;
}
if(isset($_POST['address1']) && $_POST['address1'] != ''){
    $address1 = $mysqli->real_escape_string($_POST['address1']);
} else {
	$validated = FALSE;
}
if(isset($_POST['address2']) && $_POST['address2'] != ''){
    $address2 = $mysqli->real_escape_string($_POST['address2']);
} else {$address2 = "";}

if(isset($_POST['city']) && $_POST['city'] != ''){
    $city = $mysqli->real_escape_string($_POST['city']);
} else {
	$validated = FALSE;
}

if(isset($_POST['country']) && $_POST['country'] != ''){
    $country = $mysqli->real_escape_string($_POST['country']);
} else {
	$validated = FALSE;
}

if(isset($_POST['state']) && $_POST['state'] != ''){
    $state = $mysqli->real_escape_string($_POST['state']);
} else {
	$validated = FALSE;
}
if(isset($_POST['zip']) && $_POST['zip'] != ''){
    $zip = $mysqli->real_escape_string($_POST['zip']);
} else {
	$validated = FALSE;
}
if(isset($_POST['eaName']) && $_POST['eaName'] != ''){
    $eaName = $mysqli->real_escape_string($_POST['eaName']);
} else {
	$validated = FALSE;
}
if(isset($_POST['eaEmail']) && $_POST['eaEmail'] != ''){
    $eaEmail = $mysqli->real_escape_string($_POST['eaEmail']);
} else {
	$validated = FALSE;
}
if(isset($_POST['eaOfficePhone']) && $_POST['eaOfficePhone'] != ''){
    $eaOfficePhone = $mysqli->real_escape_string($_POST['eaOfficePhone']);
} else {
	$validated = FALSE;
}
if(isset($_POST['eaMobilePhone']) && $_POST['eaMobilePhone'] != ''){
    $eaMobilePhone = $mysqli->real_escape_string($_POST['eaMobilePhone']);
} else {
	$eaMobilePhone = '';
}
if(isset($_POST['emergencyName']) && $_POST['emergencyName'] != ''){
    $emergencyName = $mysqli->real_escape_string($_POST['emergencyName']);
} else {
	$validated = FALSE;
}
if(isset($_POST['emergencyPhone']) && $_POST['emergencyPhone'] != ''){
    $emergencyPhone = $mysqli->real_escape_string($_POST['emergencyPhone']);
} else {
	$validated = FALSE;
}
if(isset($_POST['foodDiet']) && $_POST['foodDiet'] != ''){
    $foodDiet = $mysqli->real_escape_string($_POST['foodDiet']);
} else {$foodDiet = "";}
if(isset($_POST['specialNeeds']) && $_POST['specialNeeds'] != ''){
    $specialNeeds = $mysqli->real_escape_string($_POST['specialNeeds']);
} else {$specialNeeds = "";}
if(isset($_POST['jacketSize']) && $_POST['jacketSize'] != ''){
    $jacketSize = $mysqli->real_escape_string($_POST['jacketSize']);
} else {
	$validated = FALSE;
}

if(isset($_POST['arrivalDate']) && $_POST['arrivalDate'] != ''){
    $arrivalDate = $mysqli->real_escape_string($_POST['arrivalDate']);
} else {
	$validated = FALSE;
}
if(isset($_POST['arrivalAirport']) && $_POST['arrivalAirport'] != ''){
    $arrivalAirport = $mysqli->real_escape_string($_POST['arrivalAirport']);
} else {
	$validated = FALSE;
}
if(isset($_POST['arrivalFlightNum']) && $_POST['arrivalFlightNum'] != ''){
    $arrivalFlightNum = $mysqli->real_escape_string($_POST['arrivalFlightNum']);
} else {
	$validated = FALSE;
}
if(isset($_POST['departureDate']) && $_POST['departureDate'] != ''){
    $departureDate = $mysqli->real_escape_string($_POST['departureDate']);
} else {
	$validated = FALSE;
}
if(isset($_POST['departureAirport']) && $_POST['departureAirport'] != ''){
    $departureAirport = $mysqli->real_escape_string($_POST['departureAirport']);
} else {
	$validated = FALSE;
}
if(isset($_POST['departureFlightNum']) && $_POST['departureFlightNum'] != ''){
    $departureFlightNum = $mysqli->real_escape_string($_POST['departureFlightNum']);
} else {
	$validated = FALSE;
}
if(isset($_POST['arrivalAirline']) && $_POST['arrivalAirline'] != ''){
    $arrivalAirline = $mysqli->real_escape_string($_POST['arrivalAirline']);
} else {
	$validated = FALSE;
}
if(isset($_POST['originCity']) && $_POST['originCity'] != ''){
    $originCity = $mysqli->real_escape_string($_POST['originCity']);
} else {
	$validated = FALSE;
}
if(isset($_POST['arrivalConnectionInfo']) && $_POST['arrivalConnectionInfo'] != ''){
    $arrivalConnectionInfo = $mysqli->real_escape_string($_POST['arrivalConnectionInfo']);
} else { $arrivalConnectionInfo = '';}
if(isset($_POST['departureAirline']) && $_POST['departureAirline'] != ''){
    $departureAirline = $mysqli->real_escape_string($_POST['departureAirline']);
} else {
	$validated = FALSE;
}
if(isset($_POST['destinationCity']) && $_POST['destinationCity'] != ''){
    $destinationCity = $mysqli->real_escape_string($_POST['destinationCity']);
} else {
	$validated = FALSE;
}
if(isset($_POST['departureConnectionInfo']) && $_POST['departureConnectionInfo'] != ''){
    $departureConnectionInfo = $mysqli->real_escape_string($_POST['departureConnectionInfo']);
} else { $departureConnectionInfo = '';}

$hashKey = $_POST["hashKey"];
$userAgent = $_POST["userAgent"];
$userIP = $_POST["userIP"];

if ($validated === FALSE){
	header('Location: .?validation=FALSE');
} else {
	$query = "INSERT INTO data (hashKey,userAgent,userIP,firstName,lastName,company,title,
															officePhone,mobilePhone,email,address1,address2,city,country,state,zip,
															eaName,eaEmail,eaOfficePhone,eaMobilePhone,emergencyName,
															emergencyPhone,foodDiet,specialNeeds,jacketSize,arrivalDate,arrivalAirport,
															arrivalFlightNum,departureDate,departureAirport,
															departureFlightNum,arrivalAirline,originCity,arrivalConnectionInfo,
															departureAirline,destinationCity,departureConnectionInfo,attending)
						VALUES 						('$hashKey','$userAgent','$userIP','$firstName','$lastName','$company','$title',
															'$officePhone','$mobilePhone','$email','$address1','$address2','$city','$country','$state','$zip',
															'$eaName','$eaEmail','$eaOfficePhone','$eaMobilePhone','$emergencyName',
															'$emergencyPhone','$foodDiet','$specialNeeds','$jacketSize','$arrivalDate','$arrivalAirport',
															'$arrivalFlightNum','$departureDate','$departureAirport',
															'$departureFlightNum','$arrivalAirline','$originCity','$arrivalConnectionInfo',
															'$departureAirline','$destinationCity','$departureConnectionInfo','$attending')";
	//  echo $query;die();

	if ($mysqli->query($query)) {
	    header('Location: ?view=complete&result=success&attending='.$attending);
	} else {
	    header('Location: ?view=complete&result=failure');
	}

	
}





