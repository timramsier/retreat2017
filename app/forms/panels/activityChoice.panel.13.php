<a href="./public/img/golfStudio.jpg" style="background-image:url(./public/img/golfStudio.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="golfStudio_choiceNum">
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
				</ul>

				<h5>Experience Includes:</h5>
				<ul class="thin-text">
					<li>Full-service golf instruction utilizing TrackMan Golf Radar</li>
					<li>Long Drive contest</li>
					<li>Closest to the Hole contest</li>
					<li>Video analysis</li>
				</ul>

				<h5>Duration:</h5>
				<p class="thin-text">1 hour</p>

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
			    <input type="radio" name="golfStudio_equipment" id="golfStudio_equipment" value="bringing own" checked>
			    I am bringing my own
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="golfStudio_equipment" id="golfStudio_equipment" value="need to rent">
			    I need to rent
			  </label>
			</div>
			<p>
				If renting golf clubs, please specify:
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="golfStudio_handed" id="golfStudio_handed" value="right-handed" checked>
			    Right-handed
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="golfStudio_handed" id="golfStudio_handed" value="left-handed">
			    Left-handed
			  </label>
			</div>
			<br>
			<h2>Experience:</h2>
			<p>Let us know your experience with playing golf.  (must answer one)</p>
			<div class="form-group">
				<label for="golfStudio_average">What is your handicap?</label>
				<input pairWith="golfStudio_average" id="golfStudio_handicap" name="golfStudio_handicap" type="text" class="form-control" placeholder="Handicap">
			</div>
			<div class="form-group">
				<label for="golfStudio_handicap">What is your average score?</label>
				<input pairWith="golfStudio_handicap" id="golfStudio_average" name="golfStudio_average" type="text" class="form-control" placeholder="Average">
			</div>
		</div>
	</div>

	<hr class='activities'>
	<div class="row">
		<div class="col-sm-6">
			<h2>Health/Injuries:</h2>
			<p>
				Do you have any injuries?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="golfStudio_injuries" class="injuries" value="no"  dependentValue="false" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="golfStudio_injuries" class="injuries" value="yes" dependentValue="true" >
					Yes
				</label>
			</div>
			<p>
				If Yes, please list any injuries that you have.
				<br>
			</p>
			<textarea dependentOn="golfStudio_injuries" name="golfStudio_injuryInfo" id="golfStudio_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
	</div>

</div>
