<?php
$emailAddress = $_POST["main_email"];
$emailCheckQuery = 'SELECT main_email FROM holiday_main WHERE main_email = "$emailAddress"';
$emailCheck = $mysqli->query($emailCheckQuery);
if ($emailCheck->num_rows > 0) {
	$message = urlencode("It appears that someone has already registered with the email address $emailAddress.  If this is not correct, please reach out to Emily Somers at <a href='mailto:emily.somers@iac.com'>Emily.somers@iac.com</a>.");
	header('Location: ?view=oops&override=holiday&message='.$message);
} else {
	$alias = "main";
	$query = createQuery("holiday_".$alias,searchArray($_POST,$alias."_"),$mysqli);

	if (!$mysqli->query($query)) {
			$errorQuery = str_replace('\r\n', '',$mysqli->real_escape_string("MySQL error $mysqli->error <br> Query:<br> $query"));
			$queryError = "INSERT INTO holiday_failed (failed_user,failed_query) VALUES ('$hashKey','$errorQuery')";
			// echo $queryError;die();
			$errorRes = $mysqli->query($queryError);
	    header('Location: ?view=complete&override=holiday&result=failure');
	} else {

		if ($_POST["main_attending"] === "yes") {
			$message = urlencode("Thank you! We look forward to celebrating with you on Thursday, December 15 at IAC HQ.");
		} else {
			$message = urlencode("Thank you for letting us know that you will not be able to join us. Happy Holidays.");
		}
		header('Location: ?view=complete&override=holiday&result=done&message='.$message);
	}
}




