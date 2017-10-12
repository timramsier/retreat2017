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
                    <span class="notification">The registration deadline is Monday, November 7th, 2016 at 5:00PM (ET)</span>
                    
                    <hr class='default'>
                  </div>  
                  
                </div>

                <form class="multi-form" id="form-retreat" method="POST" action="submit.php">
                  <!-- Hidden inputs -->
                  <input type="hidden" name="hashKey" value=<?php echo uniqid(8); ?>>
                  <input type="hidden" name="userAgent" value=<?php echo "'".$_SERVER['HTTP_USER_AGENT']."'";?>>
                  <input type="hidden" name="userIP" value=<?php echo "'".$_SERVER['REMOTE_ADDR']."'";?>>
                  <input type='hidden' id='officePhone' name='officePhone' value='null'>
                  <input type='hidden' id='mobilePhone' name='mobilePhone' value='null'>
                  <input type='hidden' id='email' name='email' value='null'>
                  <input type='hidden' id='address1' name='address1' value='null'>
                  <input type='hidden' id='address2' name='address2' value='null'>
                  <input type='hidden' id='city' name='city' value='null'>
                  <input type='hidden' id='zip' name='zip' value='null'>
                  <input type='hidden' id='eaName' name='eaName' value='null'>
                  <input type='hidden' id='eaEmail' name='eaEmail' value='null'>
                  <input type='hidden' id='eaOfficePhone' name='eaOfficePhone' value='null'>
                  <input type='hidden' id='eaMobilePhone' name='eaMobilePhone' value='null'>
                  <input type='hidden' id='emergencyName' name='emergencyName' value='null'>
                  <input type='hidden' id='emergencyPhone' name='emergencyPhone' value='null'>
                  <input type='hidden' id='arrivalDate' name='arrivalDate' value='null'>
                  <input type='hidden' id='arrivalFlightNum' name='arrivalFlightNum' value='null'>
                  <input type='hidden' id='arrivalAirline' name='arrivalAirline' value='null'>
                  <input type='hidden' id='arrivalAirport' name='arrivalAirport' value='null'>
                  <input type='hidden' id='originCity' name='originCity' value='null'>
                  <input type='hidden' id='departureDate' name='departureDate' value='null'>
                  <input type='hidden' id='departureFlightNum' name='departureFlightNum' value='null'>
                  <input type='hidden' id='departureAirline' name='departureAirline' value='null'>
                  <input type='hidden' id='departureAirport' name='departureAirport' value='null'>
                  <input type='hidden' id='destinationCity' name='destinationCity' value='null'>
                  <input type='hidden' id='jacketSize' name='jacketSize' value='null'>
                  <input type='hidden' id='state' name='state' value='null'>
                  <input type='hidden' id='attending' name='attending' value='no'>
                  <input type='hidden' id='flightType' name='flightType' value='null'>
                  <!-- Hidden inputs -->

                  <div class="alert alert-info">
                    We are sorry to hear that you aren't attending.  Please fill out the following 
                    information so that we can update our records.
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="firstName">First Name</label>
                      <input type="text" name="firstName" class="form-control input-sm required" id="firstName" placeholder="Required" 
                              value=<?php if (isset($_GET["firstName"])) {echo "'" . urldecode($_GET["firstName"]) . "'";} ?>>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="lastName">Last Name</label>
                      <input type="text" name="lastName" class="form-control input-sm required" id="lastName" placeholder="Required" 
                              value=<?php if (isset($_GET["lastName"])) {echo "'" . urldecode($_GET["lastName"]) . "'";} ?>>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="company">Company</label>
                      <input type="text" name="company" class="form-control input-sm required" id="company" placeholder="Required" 
                              value=<?php if (isset($_GET["company"])) {echo "'" . urldecode($_GET["company"]) . "'";} ?>>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control input-sm required" id="title" placeholder="Required" 
                              value=<?php if (isset($_GET["title"])) {echo "'" . urldecode($_GET["title"]) . "'";} ?>>
                    </div>
                  </div>

                  
                  <div class="multi-form-controls" id='form-buttons'>
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
    <script type="text/javascript">$("#flightType").val("null");</script>
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