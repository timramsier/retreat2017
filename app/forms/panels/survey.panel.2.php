<div class="col-sm-6">
  <div class="form-group">
    <label for="eaName">Executive Assistant's Name <small><em>First & Last Name</em></small></label>
    <input type="text" name="eaName" class="form-control input-sm required" id="eaName" placeholder="Required"
    				value=<?php if (isset($_GET["eaName"])) {echo "'" . urldecode($_GET["eaName"]) . "'";} ?>>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="eaEmail">Executive Assistant's Email</label>
    <input type="email" name="eaEmail" class="form-control input-sm required" id="eaEmail" placeholder="Required"
    				value=<?php if (isset($_GET["eaEmail"])) {echo "'" . urldecode($_GET["eaEmail"]) . "'";} ?>>
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="eaOfficePhone">EA's Office Phone <small><em>(Required)</em></small></label>
    <input type="text" name="eaOfficePhone" class="form-control input-sm required " id="eaOfficePhone" placeholder="Required" 
    				value=<?php if (isset($_GET["eaOfficePhone"])) {echo "'" . urldecode($_GET["eaOfficePhone"]) . "'";} ?>>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="eaMobilePhone">EA's Mobile Phone <small><em>(Optional)</em></small></label>
    <input type="text" name="eaMobilePhone" class="form-control input-sm " id="eaMobilePhone" placeholder="Optional" 
    				 value=<?php if (isset($_GET["eaMobilePhone"])) {echo "'" . urldecode($_GET["eaMobilePhone"]) . "'";} ?>>
  </div>
</div>
<!-- <div class="col-sm-6 hidden-xs" style="height:52px;margin-bottom:15px;"></div> -->

<div class="col-sm-6">
  <div class="form-group">
    <label for="emergencyName">Emergency Contact Name <small><em>First & Last Name</em></small></label>
    <input type="text" name="emergencyName" class="form-control input-sm required" id="emergencyName" placeholder="Required"
    				value=<?php if (isset($_GET["emergencyName"])) {echo "'" . urldecode($_GET["emergencyName"]) . "'";} ?>>
  </div>
  <div class="form-group">
    <label for="emergancyPhone">Emergency Contact Phone <small><em>(Required)</em></small></label>
    <input type="text" name="emergencyPhone" class="form-control input-sm required " id="emergencyPhone" placeholder="Required" 
    				data-country="country" value=<?php if (isset($_GET["emergencyPhone"])) {echo "'" . urldecode($_GET["emergencyPhone"]) . "'";} ?>>
  </div>
</div>

<div class="col-lg-6" style='overflow:hidden'>
  <div class="form-group">
    <label for="foodDiet">Special Diet or Food Allergies</label>
    <textarea rows="4" name="foodDiet" class="form-control input-sm" id="foodDiet" placeholder="Optional"><?php if (isset($_GET["foodDiet"])) {echo "'" . urldecode($_GET["foodDiet"]) . "'";} ?></textarea>
  </div>
</div>
<div class="col-lg-6" style='overflow:hidden'>
  <div class="form-group">
    <label for="specialNeeds">ADA/Special Needs</label>
    <textarea rows="4" name="specialNeeds" class="form-control input-sm" id="specialNeeds" placeholder="Optional"><?php if (isset($_GET["specialNeeds"])) {echo "'" . urldecode($_GET["specialNeeds"]) . "'";} ?></textarea>
  </div>
</div>

<div class="col-xs-6">
	<div class="form-group">
		<label for="jacketSize">Jacket Size (for giveaway)</label>
		<select name="jacketSize" class="form-control input-sm" id="jacketSize">
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "womenXS"){echo "selected";} ?> value="womenXS">Women's - Extra Small</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "womenSM"){echo "selected";} ?> value="womenSM">Women's - Small</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "womenMD"){echo "selected";} ?> value="womenMD">Women's - Medium</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "womenLG"){echo "selected";} ?> value="womenLG">Women's - Large</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "womenXL"){echo "selected";} ?> value="womenXL">Women's - Extra Large</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "women2X"){echo "selected";} ?> value="women2X">Women's - 2X</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "menSM"){echo "selected";} ?> value="menSM">Men's - Small</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "menMD"){echo "selected";} ?> value="menMD">Men's - Medium</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "menLG"){echo "selected";} ?> value="menLG">Men's - Large</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "menXL"){echo "selected";} ?> value="menXL">Men's - Extra Large</option>
			<option <?php if(isset($_GET["jacketSize"]) && $_GET["jacketSize"] === "men2X"){echo "selected";} ?> value="men2X">Men's - 2X</option>
		</select>
	</div>
</div>







