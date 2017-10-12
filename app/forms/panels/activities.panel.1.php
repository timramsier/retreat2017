<input type="hidden" name="userFirstName" value=<?php echo $userInfo["firstName"];?>>
<input type="hidden" name="userLastName" value=<?php echo $userInfo["lastName"];?>>

<div class="alert alert-info">
	<h2>
  Before you get started, please verify that the following information is correct:
  </h2>
	<div class="row" id="user-info">
    <div class="col-sm-3">First Name:</div>
    <div class="col-sm-9"><?php echo $userInfo["firstName"];?></div>
    <div class="col-sm-3">Last Name:</div>
    <div class="col-sm-9"><?php echo $userInfo["lastName"];?></div>
    <div class="col-sm-3">Title:</div>
    <div class="col-sm-9"><?php echo $userInfo["title"];?></div>
    <div class="col-sm-3">Email Address:</div>
    <div class="col-sm-9"><?php echo $userInfo["email"];?></div>
    <div class="col-sm-3">Executive Assistant:</div>
    <div class="col-sm-9"><?php echo $userInfo["eaName"];?></div>
	</div>
	<br>
	<br>
	<h3>
        <em>
            If this information is correct please click <strong>Next</strong> to continue to the <strong>Activities</strong> survey 
            otherwise please exit this page.
            <br><br>
            If you require assistance please reach out to Emily Somers at <a href="mailto:emily.somers@iac.com">Emily.somers@iac.com</a> 
            or (212) 314-7347.  Thanks!
        </em>
    </h3>
    <br>
</div>	