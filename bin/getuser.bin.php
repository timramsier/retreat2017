<?php
// Get details of user's previous entry
	$query = "SELECT * FROM data WHERE hashKey='".$hashKey."'";
	$data_array = $mysqli->query($query);
	$userInfo = $data_array->fetch_assoc();

// 

if (!$multiEntryAllowed) {
	$query = "SELECT * FROM activity_main WHERE hashKey='".$hashKey."'";
	$data_array = $mysqli->query($query);
	$activityEntry = $data_array->fetch_assoc();
}

if (empty($userInfo)) {
	//if no user info is found success status is FALSE
	$getUserStatus= FALSE;
	$message = "Sorry, we could not find a user using the Access key of $hashKey.  Please check that you are using the Access Key that was sent to you";
	$oopsMessage = urlencode($message);
	header('Location:.?view=oops&message='.$oopsMessage);
}
else
{
	echo !empty($activityEntry);
	if (!empty($activityEntry)) {
		// if data is found but entry already exists success status is FALSE
		$getUserStatus= FALSE;
		$message = "It appears that you have already completed this form.  If this is not true, please reach out to Emily Somers at <a href='mailto:emily.somers@iac.com'>Emily.somers@iac.com</a> or (212) 314-7347 and we will take a look into the issue.";
		$oopsMessage = urlencode($message);
		header('Location:.?view=oops&message='.$oopsMessage);

	} else {
		//if data is found and no previous entry existssuccess status is TRUE
		$getUserStatus= TRUE;
	}
}

