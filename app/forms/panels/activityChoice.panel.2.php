<a href="./public/img/hickorygolf.jpg" style="background-image:url(./public/img/hickorygolf.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="hickoryGolf_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<p>
					<p><strong>Required Attire:</strong></p>
					<ul class="thin-text">
						<li>Traditional Golf attire is required</li>
						<li>For men: collared shirt, walking shorts or pants</li>
						<li>For women: collared shirt or shirt with sleeves, walking shorts or pants</li>
						<li>Golf shoes or tennis shoes only</li>
					</ul>
				</p>
				<p>
					<p><strong>Suggested Attire:</strong></p>
					<ul class="thin-text">
						<li>Sunglasses</li>
						<li>Sunscreen</li>
						<li>Hat</li>
						<li>Bug Spray</li>
					</ul>
				</p>
				<p>
					<p><strong>Experience Includes:</strong></p>
					<ul class="thin-text">
						<li>Shotgun start or tee times</li>
						<li>Orientation to Hickory golf equipment and era</li>
						<li>Full-time monitored play</li>
						<li>Pairings (if needed)</li>
						<li>Tournament scoring</li>
					</ul>
				</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<h3>Equipment Provided:</h3>
			<p>
				Each player will be provided two replica “Hickory golf balls” and
				authentic hickory clubs to use.
			</p>
			<p>
				Do you play left or right handed?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="hickoryGolf_equipment" id="hickoryGolf_equipment" value="right-handed" checked>
			    I play right-handed
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="hickoryGolf_equipment" id="hickoryGolf_equipment" value="left-handed">
			    I play left-handed
			  </label>
			</div>
			<br>
		</div>
	</div>

	<hr class='activities'>
	<div class="col-sm-6">
		<h2>Experience:</h2>
		<p>Let us know your experience with playing golf.  (must answer one)</p>
		<div class="form-group">
			<label for="hickoryGolf_shoeSize">What is your handicap?</label>
			<input pairWith="hickoryGolf_average" id="hickoryGolf_handicap" name="hickoryGolf_handicap" type="text" class="form-control" placeholder="Handicap">
		</div>
		<div class="form-group">
			<label for="hickoryGolf_shoeSize">What is your average score?</label>
			<input pairWith="hickoryGolf_handicap" id="hickoryGolf_average" name="hickoryGolf_average" type="text" class="form-control" placeholder="Average">
		</div>
	</div>
	<div class="col-sm-6">
		<h2>Health/Injuries</h2>
		<p>
			Do you have any Injuries?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="hickoryGolf_injuries" class="injuries" value="no"  dependentValue="false" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="hickoryGolf_injuries" class="injuries" value="yes" dependentValue="true" >
		    Yes
		  </label>
		</div>
		<p>
			If Yes, please list any injuries that you have.
			<br>
		</p>
		<textarea dependentOn="hickoryGolf_injuries" name="hickoryGolf_injuryInfo" id="hickoryGolf_injuryInfo" class="form-control" rows="5" 
		placeholder="Required if you said yes to injuries"></textarea>
	</div>

</div>
