<a href="./public/img/hiking_meadowood.jpg" style="background-image:url(./public/img/hiking_meadowood.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="hikingMeadowood_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Instruction:</h2>
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
				<p class="thin-text">Full Trail (4 miles) is approximately 2 hours</p>
				<h5>Transportation:</h5>
				<p class="thin-text">On property</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<p>
				Would you like a guided tour?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="hikingMeadowood_tour" id="hikingMeadowood_tour" value="yes" checked>
			    Yes
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="hikingMeadowood_tour" id="hikingMeadowood_tour" value="no">
			    No
			  </label>
			</div>
			<h2>Health/Injuries:</h2>
			<p>
				Do you have any injuries?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="hikingMeadowood_injuries" class="hikingMeadowood_injuries" value="no" dependentValue="false" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="hikingMeadowood_injuries" class="hikingMeadowood_injuries" value="yes" dependentValue="true" >
					Yes
				</label>
			</div>
			<p>
				If Yes, please list any injuries that you have.
				<br>
			</p>
			<textarea dependentOn="hikingMeadowood_injuries" name="hikingMeadowood_injuryInfo" id="hikingMeadowood_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
	</div>
</div>
