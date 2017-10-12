<?php
if($debug_mode == TRUE){
ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
}

if (isset($_GET["override"])) {
	$override = $_GET["override"];
}

//Pre page build section
//Connect to the database via the database configuration
include $PATH['CONFIG'].'database.php';

//Load the visual configuration file
include $PATH['CONFIG'].'visual.php';

//Load custom PHP functions
include $PATH['FUNCTIONS'].'custom.functions.php';

//if URL variable view is not set, default to intro
if (isset($_GET['view'])){$view=$_GET['view'];} else {$view='intro';}

//if URL variable type is not set, default to intro
if (isset($_GET['type'])){$type=$_GET['type'];} else {$type='attending';}

//if URL variable action is not set, default to intro
if (isset($_GET['action'])){$action=$_GET['action'];}

if (isset($action) && $action !== "")  
{
	include $PATH['BIN'].$action.".bin.php";
} 
else 
{

	echo '<!DOCTYPE html>';

	//includes the document head section
	include $PATH['BLOCKS'].'head.block.php';

	//the main framework
	include $PATH['APP'].'framework/main.frame.php';

	if (isset($override)) {
		include $PATH["OVERRIDES"].$override.".override.php";
	}

	echo '<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>';
	echo '<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
	echo '<script type="text/javascript" src="'.$PATH['JS'].'custom.js" ></script>';
	echo '<script type="text/javascript" src="'.$PATH['JS'].'moment.min.js"></script>';
	echo '<script type="text/javascript" src="'.$PATH['JS'].'bootstrap-datetimepicker.min.js"></script>';
	echo '<script type="text/javascript" src="'.$PATH['JS'].'bootstrap-formhelpers.min.js"></script>';
	echo '<script type="text/javascript" src="'.$PATH['JS'].'activities.form.js"></script>';
	echo '<script type="text/javascript" src="'.$PATH["JS"].'holidayParty.form.js" ?>></script>';
	echo '<script type="text/javascript" src="'.$PATH['JS'].'universal.functions.js"></script>';
	echo '
	    <script type="text/javascript">


	      var currentDate = new Date();
	      $(".datetime-picker").datetimepicker({
	        defaultDate: currentDate
	      });

				//Load the background image
				var backgroundImageOverride = $("a.backgroundImageOverride").attr("href");
				if (backgroundImageOverride)
				{
					$("#main-background").css({"background-image" : "url(" + backgroundImageOverride+ ")"});
				} else {
					$("#main-background").css({"background-image" : "url('.$mainBackground.')"});
				}

				//Override Header text
				var mainHeaderText = $("div#mainHeaderTextOverride").html()
				var mainHeaderSubtext = $("div#mainHeaderSubtextOverride").html()
				if (mainHeaderText)	{	$("h1#mainHeaderText").html(mainHeaderText)}			
				if (mainHeaderSubtext)	{	$("p#mainHeaderSubtext").html(mainHeaderSubtext)}

				//Override Notification text
				var notificationText = $("div#notificationTextOverride").html()
				if (notificationText)	{	$("span.notification").html(notificationText)}

				//Override Header styling
				if($(".headerOverride").length > 0) {$("header").attr("style",$(".headerOverride").attr("style"))}
	    </script>
	';

	if (isset($_GET["validation"]) && $_GET["validation"] == 'FALSE')
	{
	  echo "<script type='text/javascript'>$('.form-panel .error-message').show();</script>";
	}
	if (isset($_GET["validation"]) && $_GET["validation"] == 'TRUE')
	{
	  echo "<script type='text/javascript'>$('.success-message').show();</script>";
	}

	echo '</html>';
}

