<?php
//if URL variable result is not set, default to intro
if (isset($_GET['message'])){$result=$_GET['message'];}
?>

<div class ="col-md-8 col-md-offset-2">
  <div class='panel panel-default' id="questionaire">
    <div class="row">
      <center>
        <br>
        <br>
        <p><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></p>
        <h1>Oops!</h1>
        <br>

        <?php if (isset($_GET["message"]) && $_GET["message"] !== "") : ?>
          <p class='success-text'>
            <?php echo urldecode($_GET["message"])?>
          </p>
        <?php endif;?>
         <center><button class="btn btn-holiday" onclick="window.history.back();">Go Back</button></center>
         <br>
         <br>
      </center>
    </div>
  </div>
</div>