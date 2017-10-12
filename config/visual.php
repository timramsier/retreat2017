<?php

/* =================================================================================

																	VISUAL CONFIGURATION FILE 

  =================================================================================*/
/*
	This is the visual configuration file used for the application.  Changing these settings
	changes the text and/or graphics used throughout the site
*/





// ============================= Main Settings ====================================

// this sets the main static background image of the page
$mainBackground = $PATH["IMG"]."grapes.jpg";








// ============================ Header Settings ===================================

// this sets the Logo that is displayed in the header
$headerLogo 		= $PATH["IMG"]."IAC_white.png";

// this sets the Header main text on all the pages
$headerMainText = "Welcome to the <strong>IAC</strong> Annual Planning Meeting Questionnaire.";

// this sets the subtext under the Header on all pages
$headerSubText 	= "Come join the rest of the Executive Team in Napa, California!";








// ================================ Form Text =====================================

// this sets the form text at the top of the form
$formText 			= "The registration deadline Friday, October 27 at 4:00 pm (ET)";



// =============================== Submit Text ====================================

// this text is the error message when a submit fails
$completeFailureText = 
								'	<p><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span></p>
									<h1>Oops!</h1>
  								<br>
	                <p class="success-text">
	                  Oops!  Something went wrong.  It appears that we were not able to process your submission.
	                  Please reach out to Emily Somers at <a href="mailto:emily.somers@iac.com">Emily.somers@iac.com</a> 
	                  or (212) 314-7347.
	                </p>
  							';