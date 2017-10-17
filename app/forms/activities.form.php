<?php
$validAccess = FALSE;
//This gets the key via GET for direct linking
if (isset($_GET["key"]) && $_GET["key"] !== "") {$hashKey = $_GET["key"]; $validAccess = TRUE;}
//This gets the key via POST for form submission
if (isset($_POST["key"]) && $_POST["key"] !== "") {$hashKey = $_POST["key"]; $validAccess = TRUE;} 

//get the user data
include $PATH["BIN"]."getuser.bin.php";

if (!$validAccess) {
  header('Location:.?view=access');
}

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

// get the list of activities
$query1 = "SELECT * FROM activity_key";
$results = $mysqli->query($query1);

echo '<script>
var activityTypes ='.json_encode($activityTypes).'
var activityDesc ='.json_encode($activityDesc).'
</script>';

?>



<form class="multi-form" id="form-activities" method="POST" action=".?action=addActivities" >
  <!-- Hidden inputs -->
  <input type="hidden" name="hashKey" value=<?php echo $hashKey; ?>>
  <input type="hidden" name="userAgent" value=<?php echo "'".$_SERVER['HTTP_USER_AGENT']."'";?>>
  <input type="hidden" name="userIP" value=<?php echo "'".$_SERVER['REMOTE_ADDR']."'";?>>
  <?php while ($row = $results->fetch_assoc()) : ?>
    <input type="hidden" name=<?php echo $row["key_alias"]."_user" ?> value=<?php echo $hashKey; ?>>
  <?php endwhile; ?>
  <!-- Hidden inputs -->

  <div class="container-fluid">
    <div class="row">

      <div class="form-panel">
        <?php include $PATH['FORMS']."panels/activities.panel.1.php" ?>
      </div>

      <div class="form-panel">
          <div class="error-message alert alert-danger" style="display:none;">
            <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
          </div>
        <?php include $PATH['FORMS']."panels/activities.panel.2.php" ?>
      </div>

      <div class="form-panel" id='panel-1'>
          <h3 style="text-align:right;">Your First Selection</h3>
          <div class="error-message alert alert-danger" style="display:none;">
            <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
          </div>
          <div class="activityDescription">
            <h1 class='title'></h1>
            <span class='text'></span>
          </div>
          <div id='activityChoice1'>
          </div>
      </div>

      <div class="form-panel" id='panel-2'>
          <h3 style="text-align:right;">Your Second Selection</h3>
          <div class="error-message alert alert-danger" style="display:none;">
            <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
          </div>
          <div class="activityDescription">
            <h1 class='title'></h1>
            <span class='text'></span>
          </div>
          <div id='activityChoice2'>
            <?php include $PATH['FORMS']."panels/activityChoice.panel.null.php" ?>
          </div>
      </div>

      <div class="form-panel" id='panel-3'>
        <h3 style="text-align:right;">Your Third Selection</h3>
          <div class="error-message alert alert-danger" style="display:none;">
            <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
          </div>
          <div class="activityDescription">
            <h1 class='title'></h1>
            <span class='text'></span>
          </div>
          <div id='activityChoice3'>
            <?php include $PATH['FORMS']."panels/activityChoice.panel.null.php" ?>
          </div>
      </div>

    </div>
  </div>
  
  <div class="multi-form-controls" id='form-buttons'>
    <button type="button" class="form-panel-button btn btn-primary" data-toggle="back">Previous</button>
    <button type="button" class="form-panel-button btn btn-primary" data-toggle="next">Next</button>
    <button type="submit" onsubmit="false" class="form-panel-button btn btn-primary" data-toggle="submit">Submit</button>
  </div>
</form>