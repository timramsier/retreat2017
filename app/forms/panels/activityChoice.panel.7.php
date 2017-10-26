<a href="./public/img/hiking_bothe.jpg" style="background-image:url(./public/img/hiking_bothe.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="hikingBothe_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<h5>Suggested Attire:</h5>
				<ul class="thin-text">
					<li>Shoes with Tread or Hiking Boots</li>
					<li>Light Layers</li>
					<li>Sunglasses</li>
					<li>Sunscreen</li>
					<li>Hat</li>
					<li>Bug Spray</li>
					<li>Water Bottle</li>
				</ul>
				<h5>Duration:</h5>
				<p class="thin-text">3.5 hours</p>
				<h5>Transportation:</h5>
				<p class="thin-text">Roundtrip transportation is provided</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<h3>Each participant will be provided hiking sticks, a water hip bag, and unlimited water.</h3>
			<br />
				<h2>Injuries</h2>
				<div>
					<p>
						Do you have any injuries?
					</p>
					<div class="radio">
						<label>
							<input type="radio" name="hikingBothe_injuries" class="hikingBothe_injuries" value="no" dependentValue="false" checked>
							No
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="hikingBothe_injuries" class="hikingBothe_injuries" value="yes" dependentValue="true" >
							Yes
						</label>
					</div>
					<p>
						If Yes, please list any injuries that you have.
						<br>
					</p>
					<textarea dependentOn="hikingBothe_injuries" name="hikingBothe_injuryInfo" id="hikingBothe_injuryInfo" class="form-control" rows="5" 
					placeholder="Required if you said yes to injuries"></textarea>
				</div>
				<br>
				<h2>Health</h2>
				<div>
					<p>
						Do you have any food allergies or dietary restrictions?
					</p>
					<div class="radio">
						<label>
							<input type="radio" name="hikingBothe_foodRestriction" class="hikingBothe_foodRestriction" value="no" dependentValue="false" checked>
							No
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="hikingBothe_foodRestriction" class="hikingBothe_foodRestriction" value="yes" dependentValue="true" >
							Yes
						</label>
					</div>
					<br	/>
					<p>
						If Yes, please list any food allergies or dietary restrictions.
					</p>
					<textarea dependentOn="hikingBothe_foodRestriction" name="hikingBothe_foodRestrictionInfo" id="hikingBothe_foodRestrictionInfo" class="form-control" rows="5" 
					placeholder="Required if you said yes to food allergies or dietary restrictions"></textarea>
				</div>

		</div>
	</div>
</div>
