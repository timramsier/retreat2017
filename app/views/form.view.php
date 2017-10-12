<div class ="col-md-8 col-md-offset-2">
  <div class='panel panel-default' id="questionaire">
    <div class="row">
      <div class="col-xs-12" id="form-status">
        <span class="notification"><?php echo $formText; ?><span id="form-section"></span></span>       
        <hr class='default'>
      </div>     
    </div>

    <?php include $PATH['FORMS'].$type.'.form.php'; ?>

  </div>
</div>