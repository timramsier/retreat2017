<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IAC Executive Retreat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<link rel="stylesheet" href="public/css/stylesheet.css" type="text/css">
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
                <h1>Welcome to the <strong>IAC</strong> Executive Retreat Registration Questionaire.</h1>
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
                  <center>
                    <br>
                    <br>
                    <p><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span></p>
                    <h1>Oops!</h1>
                    <br>
                    <p class="success-text">
                      Oops!  Something went wrong.  It appears that we were not able to process your submission.
                      Please reach out to Emily Somers at <a href="mailto:emily.somers@iac.com">Emily.somers@iac.com</a> 
                      or (212) 314-7347.
                    </p>
                  </center>
                </div>
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

    <?php if (isset($_GET["validation"]) && $_GET["validation"] == 'FALSE'){
      echo "<script type='text/javascript'>$('.form-panel .error-message').show();</script>";
    }?>
    <?php if (isset($_GET["validation"]) && $_GET["validation"] == 'TRUE'){
      echo "<script type='text/javascript'>$('.success-message').show();</script>";
    }?>
  </body>
</html>