<?php 
include $PATH["BIN"]."getCompanies.holiday.bin.php";
if (isset($_GET["attendance"])) {
	$attendance = $_GET["attendance"];
}

// set override to "holiday" explicitly
$override = "holiday";
?>

<?php if ($attendance === "yes" || $attendance === "no"): ?>
	<p class="thin-text">
		<?php if ($attendance === "yes"): ?>
			We are glad that you can make it to the party.  Please fill out the following information so we can keep track.  Happy Holidays!
		<?php elseif ($attendance === "no") : ?>
			We are sorry to hear that you can't make it.  Please fill out the following information so we can keep track.  Happy Holidays!
		<?php endif ?>
	</p>
	<br>

	<form class="multi-form" id="form-retreat" method="POST" action=".?action=holidayRegister" >
	  <!-- Hidden inputs -->
	  <input type="hidden" name="main_hashKey"   value=<?php echo uniqid(8); ?>>
	  <input type="hidden" name="main_userAgent" value=<?php echo "'".$_SERVER['HTTP_USER_AGENT']."'";?>>
	  <input type="hidden" name="main_userIP"    value=<?php echo "'".$_SERVER['REMOTE_ADDR']."'";?>>
	  <!-- Hidden inputs -->

	  <div class="container-fluid">
	    <div class="form-panel active">
	    <div class="row">
	      <h3>Attendee Information:</h3>
	      <div class="error-message alert alert-danger" style="display:none;">
	        <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
	      </div>
	        <div class="col-sm-6">
	          <div class="form-group">
	            <label for="main_firstName">First Name</label>
	            <input type="text" name="main_firstName" class="form-control input-sm required" id="main_firstName" placeholder="Required" 
	                    value=<?php if (isset($_GET["firstName"])) {echo "'" . urldecode($_GET["firstName"]) . "'";} ?>>
	          </div>
	        </div>
	        <div class="col-sm-6">
	          <div class="form-group">
	            <label for="main_lastName">Last Name</label>
	            <input type="text" name="main_lastName" class="form-control input-sm required" id="main_lastName" placeholder="Required" 
	                    value=<?php if (isset($_GET["lastName"])) {echo "'" . urldecode($_GET["lastName"]) . "'";} ?>>
	          </div>
	        </div>
	        <div class="col-sm-6">
	          <div class="form-group">
	            <label for="main_email">Email Address <small><em>Business Email Only (no personal emails)</em></small></label>
	            <input type="main_email" name="main_email" class="form-control input-sm required" id="main_email" placeholder="Required" 
	                    value=<?php if (isset($_GET["email"])) {echo "'" . urldecode($_GET["email"]) . "'";} ?>>
	          </div>
	        </div>
	        <div class="col-sm-6">
	          <div class="form-group">
	            <label for="main_company">Company</label>
	              <select name="main_company" class="form-control input-sm" id="main_company">
	                <?php while ($row = $companies_array->fetch_assoc()) : ?>
	                  <option value=<?php echo "'".$row["company_name"]."'"; ?> 
	                          guest=<?php echo $row["company_guest"]; ?>>
	                          <?php echo $row["company_name"]; ?>
	                  </option>
	                <?php endwhile; ?>
	              </select>       
	          </div>
	        </div>
	        <?php if ($attendance === "yes"): ?>
	        <input type='hidden' name='main_attending' value='yes'>
	        	<div class="col-sm-6">
		          <div class="guestRadio" style="display:none">
		            <p>
		              Will you be bringing a guest?
		            </p>
		            <div class="radio">
		              <label>
		                <input type="radio" name="main_guest" class="main_guest" value="yes" dependentValue="true">
		                Yes
		              </label>
		            </div>
		            <div class="radio">
		              <label>
		                <input type="radio" name="main_guest" class="main_guest" value="no" checked dependentValue="false">
		                No
		              </label>
		            </div>
		          </div>
		        </div>
		        <div class="col-sm-6">
		          <div class="form-group" style="display:none;">
		            <label for="main_guestName">Guest Name <small><em>Full Name</em></small></label>
		            <input type="text" name="main_guestName" class="form-control input-sm" id="main_guestName" placeholder="Required if bringing a guest" 
		                    dependentOn="main_guest"
		                    value=<?php if (isset($_GET["guestName"])) {echo "'" . urldecode($_GET["guestName"]) . "'";} ?>>
		          </div>
		        </div>
		      <?php else : ?>
		       <input type='hidden' name='main_attending' value='no'>
	        <?php endif ?>
	      </div>                
	    </div>
	  </div>
	  
	  <div class="multi-form-controls" id='form-buttons'>
	    <button type="submit" onsubmit="false" class="form-panel-button btn btn-holiday" data-toggle="submit">Submit</button>
	  </div>
	</form>	
<?php else : ?>

<?php 
	$message = urlencode("It appears that that something went wrong.  Go back and try again.  If this problem continues, please reach out to Emily Somers at <a href='mailto:emily.somers@iac.com'>emily.somers@iac.com</a>.");
	header("Location:.?view=oops&override=holiday&message=".$message) 
?>
<?php endif ?>
