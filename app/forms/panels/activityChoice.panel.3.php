<a href="./public/img/vineyards.jpg" style="background-image:url(./public/img/vineyards.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="sipNcycle_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-6 col-sm-push-6">
			<div class="alert alert-info">

				<h5>Suggested Attire:</h5>
				<ul class="thin-text">
					<li>Light Layers</li>
					<li>Tennis Shoes</li>
					<li>Pants or Shorts (right leg pant will need to be rolled up)</li>
					<li>Sunglasses</li>
					<li>Sunscreen</li>
					<li>Hat</li>
				</ul>


				<h5>Duration:</h5>
				<p class="thin-text">5.5 hours total</p>


				<h5>Transportation:</h5>
				<p class="thin-text">Roundtrip transportation provided</p>

			</div>
		</div>
		<div class="col-sm-6 col-sm-pull-6">

			<h3>Each participant will be provided a helmet and a hybrid bike to use.</h3>

			<label for="sipNcycle_height">What is your height? <small>(in inches)</small></label>
			<div class="input-group">
		  	<input name="sipNcycle_height" type="text" class="form-control required" placeholder="Required">
		  	<span class="input-group-addon">inches</span>
			</div>

		</div>
	</div>

	<hr class='activities'>
	<div class="row">
		<div class="col-sm-12"><h2>Health/Injuries</h2></div>
		<div class="col-sm-6">
			<p>
				Do you have any injuries?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="sipNcycle_injuries" class="injuries" value="no"  dependentValue="false" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="sipNcycle_injuries" class="injuries" value="yes" dependentValue="true" >
					Yes
				</label>
			</div>
			<br />
			<p>
				If Yes, please list any injuries that you have.
				<br>
			</p>
			<textarea dependentOn="sipNcycle_injuries" name="sipNcycle_injuryInfo" id="sipNcycle_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
		<div class="col-sm-6">
			<p>
				Do you have any food allergies or dietary restrictions?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="sipNcycle_foodRestriction" class="sipNcycle_foodRestriction" value="no" dependentValue="false" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="sipNcycle_foodRestriction" class="sipNcycle_foodRestriction" value="yes" dependentValue="true" >
					Yes
				</label>
			</div>
			<br	/>
			<p>
				If Yes, please list any food allergies or dietary restrictions.
				<br>
			</p>
			<textarea dependentOn="sipNcycle_foodRestriction" name="sipNcycle_foodRestrictionInfo" id="sipNcycle_foodRestrictionInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to food allergies or dietary restrictions"></textarea>
		</div>
	</div>
</div>
