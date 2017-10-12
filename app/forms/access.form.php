<div class='row'>
	<form class="multi-form" method="POST" action="?view=form&type=activities" id="accessForm">
	  <div class="col-sm-8 col-sm-offset-2">
	    <div class="form-group">
	      <input type="text" name="key" class="form-control input-sm required" id="key" placeholder="Required" 
	              value=<?php if (isset($_GET["key"])) {echo "'" . urldecode($_GET["key"]) . "'";} ?>>
	    </div>
	  </div>
	  <div class="col-xs-12">
	    <center><button type="submit" onsubmit="false" class="btn btn-primary" data-toggle="submit">Submit</button></center>
	  </div>
	</form>
</div>
