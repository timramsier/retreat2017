<?php

function createQuery($insertTable, $keyArray, $mysqli){
	$stringVar1 = "";
	$stringVar2 = "";
	for ($i=0; $i < count($keyArray); $i++) { 
		if ($i === 0) {$lead = "";} else {$lead = ", ";}
	 	$stringVar1 .= $lead.$keyArray[$i];
	 	// $stringVar2 .= $lead."'".$_POST[$keyArray[$i]]."'";
	 	$stringVar2 .= $lead."'".str_replace('\r\n', '',$mysqli->real_escape_string($_POST[$keyArray[$i]]))."'";
	 } 

	return "INSERT INTO $insertTable ($stringVar1) VALUES ($stringVar2)";
}

function searchArray($array, $searchTerm){
	foreach ($_POST as $key => $entry) {
		if (strpos($key, $searchTerm) !== FALSE) {
			$matches[] = $key;
		}
	}
	return $matches;
}