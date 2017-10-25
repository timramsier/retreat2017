<?php

// create an array for all of the activity types
$query1 = "SELECT * FROM activity_key";
$results = $mysqli->query($query1);
$activityTypes = [];
while ($row = $results->fetch_assoc()) {
  if ($row['key_name'] !== 'No Activity') {
    $activityTypes[] = $row['key_name'];
  }
}

// get the list of activity descriptions
$query1 = "SELECT * FROM activity_key";
$results = $mysqli->query($query1);
$activityDesc = [];
while ($row = $results->fetch_assoc()) {
  $activityDesc[] = $row['key_desc'];
}