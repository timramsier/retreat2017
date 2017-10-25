<a href="./public/img/golf.jpg" style="background-image:url(./public/img/golf.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="golfTournament_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">

				<h5>Required Attire:</h5>
				<ul class="thin-text">
					<li>Traditional Golf attire is required</li>
					<li>For men: collared shirt, walking shorts or pants</li>
					<li>For women: collared shirt or shirt with sleeves, walking shorts or pants</li>
					<li>Golf shoes or tennis shoes only</li>
				</ul>

				<h5>Suggested Attire:</h5>
				<ul class="thin-text">
					<li>Sunglasses</li>
					<li>Golf Glove</li>
					<li>Sunscreen</li>
					<li>Hat</li>
					<li>Bug Spray</li>
				</ul>

				<h5>Shootout Includes:</h5>
				<ul class="thin-text">
					<li>9 holes: shotgun start or tee times</li>
					<li>Pairings (if needed)</li>
					<li>Closest to he Hole contest</li>
					<li>Tournament scoring</li>
					<li>Bag tags for each player</li>
				</ul>

				<h5>Transportation:</h5>
				<p class="thin-text">On property</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<h3>
				Each player will be provided sleeve of balls and clubs if they need them.
			</h3>
			<p>
				Will you be bringing your own golf clubs?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="golfTournament_equipment" id="golfTournament_equipment" value="bringing own" checked>
			    I am bringing my own
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="golfTournament_equipment" id="golfTournament_equipment" value="need to rent">
			    I need to rent
			  </label>
			</div>
			<p>
				If renting golf clubs, please specify:
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="golfTournament_handed" id="golfTournament_handed" value="right-handed" checked>
			    Right-handed
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="golfTournament_handed" id="golfTournament_handed" value="left-handed">
			    Left-handed
			  </label>
			</div>
			<br>
			<h2>Experience:</h2>
			<p>Let us know your experience with playing golf.  (must answer one)</p>
			<div class="form-group">
				<label for="golfTournament_average">What is your handicap?</label>
				<input pairWith="golfTournament_average" id="golfTournament_handicap" name="golfTournament_handicap" type="text" class="form-control" placeholder="Handicap">
			</div>
			<div class="form-group">
				<label for="golfTournament_handicap">What is your average score?</label>
				<input pairWith="golfTournament_handicap" id="golfTournament_average" name="golfTournament_average" type="text" class="form-control" placeholder="Average">
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
					<input type="radio" name="golfTournament_injuries" class="injuries" value="no"  dependentValue="false" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="golfTournament_injuries" class="injuries" value="yes" dependentValue="true" >
					Yes
				</label>
			</div>
			<p>
				If Yes, please list any injuries that you have.
				<br>
			</p>
			<textarea dependentOn="golfTournament_injuries" name="golfTournament_injuryInfo" id="golfTournament_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
	</div>

</div>
