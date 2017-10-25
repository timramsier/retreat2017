<a href="./public/img/hickorygolf.jpg" style="background-image:url(./public/img/hickorygolf.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="hickoryGolf_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">

				<h5>Required Attire:</h5>
				<ul class="thin-text">
					<li class="no-space">Traditional Golf attire is required</li>
					<li class="no-space">For men: collared shirt, walking shorts or pants</li>
					<li class="no-space">For women: collared shirt or shirt with sleeves, walking shorts or pants</li>
					<li class="no-space">Golf shoes or tennis shoes only</li>
				</ul>

				<h5>Suggested Attire:</h5>
				<ul class="thin-text">
					<li class="no-space">Sunglasses</li>
					<li class="no-space">Golf Glove</li>
					<li class="no-space">Sunscreen</li>
					<li class="no-space">Hat</li>
					<li class="no-space">Bug Spray</li>
				</ul>

				<h5>Experience Includes:</h5>
				<ul class="thin-text">
					<li class="no-space">Shotgun start or tee times</li>
					<li class="no-space">Orientation to Hickory golf equipment and era</li>
					<li class="no-space">Full-time monitored play</li>
					<li class="no-space">Pairings (if needed)</li>
					<li class="no-space">Tournament scoring</li>
				</ul>

				<h5>Shootout Includes:</h5>
				<ul class="thin-text">
					<li class="no-space">9 holes: shotgun start or tee times</li>
					<li class="no-space">Pairings (if needed)</li>
					<li class="no-space">Closest to the hole contest</li>
					<li class="no-space">Tournament scoring</li>
					<li class="no-space">Bag tags for each player</li>
				</ul>

				<h5>Transportation:</h5>
				<p class="thin-text">On property</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<h3>
				Each player will be provided two replica “Hickory golf balls” and
				authentic hickory clubs to use.
			</h3>
			<p>
				Do you play left or right handed?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="hickoryGolf_handed" id="hickoryGolf_handed" value="right-handed" checked>
			    I play right-handed
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="hickoryGolf_handed" id="hickoryGolf_handed" value="left-handed">
			    I play left-handed
			  </label>
			</div>
			<br>
			<h2>Experience:</h2>
			<p>Let us know your experience with playing golf.  (must answer one)</p>
			<div class="form-group">
				<label for="hickoryGolf_average">What is your handicap?</label>
				<input pairWith="hickoryGolf_average" id="hickoryGolf_handicap" name="hickoryGolf_handicap" type="text" class="form-control" placeholder="Handicap">
			</div>
			<div class="form-group">
				<label for="hickoryGolf_handicap">What is your average score?</label>
				<input pairWith="hickoryGolf_handicap" id="hickoryGolf_average" name="hickoryGolf_average" type="text" class="form-control" placeholder="Average">
			</div>
		</div>
	</div>

	<hr class='activities'>
	<div class="row">
		<div class="col-sm-6">
			<h2>Health/Injuries</h2>
			<p>
				Do you have any injuries?
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

</div>