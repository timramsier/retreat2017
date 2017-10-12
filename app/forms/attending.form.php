<form class="multi-form" id="form-retreat" method="POST" action=".?action=submit" >
  <!-- Hidden inputs -->
  <input type="hidden" name="hashKey" value=<?php echo uniqid(8); ?>>
  <input type="hidden" name="userAgent" value=<?php echo "'".$_SERVER['HTTP_USER_AGENT']."'";?>>
  <input type="hidden" name="userIP" value=<?php echo "'".$_SERVER['REMOTE_ADDR']."'";?>>
  <input type='hidden' id='attending' name='attending' value='yes'>
  <!-- Hidden inputs -->

  <div class="container-fluid">
    <div class="row">
      <div class="form-panel active">
        <h3>Attendee Information:</h3>
        <div class="error-message alert alert-danger" style="display:none;">
          <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
        </div>
        <?php include $PATH['FORMS']."panels/survey.panel.1.php" ?>
      </div>

      <div class="form-panel">
        <h3>Miscellaneous Information:</h3>
          <div class="error-message alert alert-danger" style="display:none;">
            <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
          </div>
        <?php include $PATH['FORMS']."panels/survey.panel.2.php" ?>
      </div>

      <div class="form-panel">
        <h3>Travel Information:</h3>
          <div class="error-message alert alert-danger" style="display:none;">
            <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
          </div>
        <?php include $PATH['FORMS']."panels/survey.panel.3.php" ?>
      </div>

    </div>
  </div>
  
  <div class="multi-form-controls" id='form-buttons'>
    <button type="button" class="form-panel-button btn btn-primary" data-toggle="back">Previous</button>
    <button type="button" class="form-panel-button btn btn-primary" data-toggle="next">Next</button>
    <button type="submit" onsubmit="false" class="form-panel-button btn btn-primary" data-toggle="submit">Submit</button>
  </div>
</form>