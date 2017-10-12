<?php
//if URL variable result is not set, default to intro
if (isset($_GET['result'])){$result=$_GET['result'];}
if (isset($_GET['message'])){$message=$_GET['message']; $showMessage=TRUE;} else {$message="<p style='text-align:center' class='success-text'>Thank You</p>"; $showMessage=FALSE;}
?>

<div class ="col-md-8 col-md-offset-2">
  <div class='panel panel-default' id="questionaire">
    <div class="row">
      <center>
        <br>
        <br>

        <?php
          if (isset($result) && $result === "success") 
          {

            echo '<p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></p>
                  <h1>Success!</h1>
                  <br>';
            if (isset($_GET["attending"]) && $_GET["attending"] === "yes"){
              echo "  <p class='success-text'>
                        Thank you for registering for the IAC Executive Retreat. We will be sending more 
                        information about the agenda and activities soon. In the meantime, if
                        you have any questions or concerns please contact Emily Somers in the IAC Events 
                        Department at <a href='mailto:emily.somers@iac.com'>Emily.somers@iac.com</a> or (212) 314-7347.
                      </p>";
            } 
            elseif (isset($_GET["attending"]) && $_GET["attending"] === "no") {
              echo "  <p class='success-text'>
                        Thank you for letting us know you are opting out of the IAC Executive Retreat. If
                        you have any questions or concerns please contact Emily Somers in the IAC Events 
                        Department at <a href='mailto:emily.somers@iac.com'>Emily.somers@iac.com</a> or (212) 314-7347.
                      </p>";
            }
          } 
          elseif (isset($result) && $result === "failure" && $showMessage == FALSE) 
          {
            echo $completeFailureText;
          } 
          elseif (isset($result) && $result === "failure" && $showMessage == TRUE)
          {
            echo "<p><span class='glyphicon glyphicon-warning-sign' aria-hidden='true'></span></p>
                  <h1>Oops!</h1>
                  <br>
                  <p class='success-text'>$message</p>";
          }
          elseif (isset($result) && $result === "done" && $showMessage == FALSE)
          {
            echo '<p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></p>
                  <h1>Success!</h1>
                  <br>';
            echo "  <p class='success-text'>
                      You’re all set! If you have and questions about your selected activities, please contact Emily 
                      Somers at <a href='emily.somers@iac.com'>emily.somers@iac.com</a>. Thank you.
                    </p>";
          }
          elseif (isset($result) && $result === "done" && $showMessage == TRUE) 
          {
            echo "<p><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></p>
                  <h1>Success!</h1>
                  <br>
                  <p class='success-text'>$message</p>";
          } 
          else 
          {
            echo "<p class='success-text'>$message</p>";
          }
        ?>

      </center>
    </div>
  </div>
</div>