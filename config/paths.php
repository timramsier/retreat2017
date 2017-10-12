<?php

/*	=================================================================================
	This is the configuration file for all of the paths that work in this application
	Do not modify this unless you know what you are doing!
*/
if($domain_name == 'localhost'){
	define('__ROOT__' , './');
}
else
{
	define('__ROOT__' , dirname(pathinfo(__FILE__, PATHINFO_DIRNAME)));
}
$lms_path = "http://whatsontap.iad.ops.ask.com/lms/"; //Currently Hard Coded

$PATH = array(
	'CONFIG' 		=> __ROOT__.'/config/',
	'CSS' 			=> __ROOT__.'/public/css/',
	'IMG' 			=> __ROOT__.'/public/img/',
	'APP' 			=> __ROOT__.'/app/',
	'JS' 				=> __ROOT__.'/public/js/',
	'VIEWS' 		=> __ROOT__.'/app/views/',
	'BIN' 			=> __ROOT__.'/bin/',
	'FORMS' 		=> __ROOT__.'/app/forms/',
	'BLOCKS' 		=> __ROOT__.'/app/blocks/',
	'OVERRIDES' => __ROOT__.'/app/overrides/',
	'FUNCTIONS' => __ROOT__.'/functions/'
 );
