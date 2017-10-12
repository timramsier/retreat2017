<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IAC Executive Retreat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<link rel="stylesheet" href="public/css/stylesheet.css" type="text/css">
      <link rel="stylesheet" href="public/css/bootstrap-datetimepicker.min.css" />
      <link rel="stylesheet" href="public/css/bootstrap-formhelpers.min.css" />
  </head>
  <body>
		<div id="main-background"></div>
    <div class="container-fluid" id="master-container">

      <header>
        <div id='welcome'>
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-md-3 logo">
                <img class="img-responsive" src='public/img/IAC_white.png'>
              </div>
              <div class="col-sm-8 col-md-9 ">
                <h1>Welcome to the <strong>IAC</strong> Executive Retreat Registration Questionnaire.</h1>
                <p>Come join the rest of the Executive Team in Aspen, CO!</p>
                
                
              </div>
            </div>
          </div>
        </div>
      </header>

      <?php include "config/database.php" ?>

      <main>
        <div class="container">
          <div class="row">
            <div class ="col-md-8 col-md-offset-2">
              <div class='panel panel-default' id="questionaire">
                <div class="row">
                  <div class="col-xs-12" id="form-status">
                    <span class="notification">The registration deadline is Monday, November 7th, 2016 at 5:00PM (ET)<span id="form-section"></span></span>
                    
                    <hr class='default'>
                  </div>  
                  
                </div>

                <form class="multi-form" id="form-retreat" method="POST" action="submit.php">
                  <!-- Hidden inputs -->
                  <input type="hidden" name="hashKey" value=<?php echo uniqid(8); ?>>
                  <input type="hidden" name="userAgent" value=<?php echo "'".$_SERVER['HTTP_USER_AGENT']."'";?>>
                  <input type="hidden" name="userIP" value=<?php echo "'".$_SERVER['REMOTE_ADDR']."'";?>>
                  <input type='hidden' id='attending' name='attending' value='yes'>
                  <!-- Hidden inputs -->

                  <div class="container-fluid">
                    <div class="row">
                      <div class="form-panel active" data-index="0">
                        <h3>Attendee Information:</h3>
                        <div class="error-message alert alert-danger" style="display:none;">
                          <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
                        </div>
                        <?php include "views/form/fieldset.1.php" ?>
                      </div>

                      <div class="form-panel" data-index="1">
                        <h3>Miscellaneous Information:</h3>
                          <div class="error-message alert alert-danger" style="display:none;">
                            <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
                          </div>
                        <?php include "views/form/fieldset.2.php" ?>
                      </div>

                      <div class="form-panel" data-index="2">
                        <h3>Travel Information:</h3>
                          <div class="error-message alert alert-danger" style="display:none;">
                            <p>Please make sure that all <strong>Required</strong> fields are completely filled out.</p>
                          </div>
                        <?php include "views/form/fieldset.3.php" ?>
                      </div>

                    </div>
                  </div>
                  
                  <div class="multi-form-controls" id='form-buttons'>
                    <button type="button" class="form-panel-button btn btn-primary" data-toggle="back">Previous</button>
                    <button type="button" class="form-panel-button btn btn-primary" data-toggle="next">Next</button>
                    <button type="submit" onsubmit="false" class="form-panel-button btn btn-primary" data-toggle="submit">Submit</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="public/js/custom.js" type="text/javascript"></script>
    <script type="text/javascript" src="public/js/moment.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap-formhelpers.min.js"></script>
    <script type="text/javascript">
      var currentDate = new Date();
      $('.datetime-picker').datetimepicker({
        defaultDate: currentDate
      });
    </script>

    <?php if (isset($_GET["validation"]) && $_GET["validation"] == 'FALSE'){
      echo "<script type='text/javascript'>$('.form-panel .error-message').show();</script>";
    }?>
    <?php if (isset($_GET["validation"]) && $_GET["validation"] == 'TRUE'){
      echo "<script type='text/javascript'>$('.success-message').show();</script>";
    }?>
  </body>
</html>