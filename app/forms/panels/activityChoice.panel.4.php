<a href="./public/img/tennis.jpg" style="background-image:url(./public/img/tennis.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="tennis_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">

				<h5>Suggested Attire:</h5>
				<ul class="thin-text">
					<li>Modern tennis attire, including non-collared shirts are acceptable</li>
					<li>Non-marking tennis shoes ONLY</li>
					<li>Sunglasses</li>
					<li>Sunscreen</li>
					<li>Hat</li>
					<li>Bug Spray</li>
				</ul>

			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">

			<h3>Each participant will be provided with rackets and tennis balls to use</h3>

			<h2>Instruction:</h2>
			<p>
				What is your preferred instruction with the Head Pro?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="tennis_instructionType" class="tennis_instructionType" value="private" checked>
					Private Lession
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="tennis_instructionType" class="tennis_instructionType" value="group">
					Group Clinic (four or more people)
				</label>
			</div>
		</div>
	</div>

	<hr class='activities'>
	<div class="row">
		<div class="col-sm-6">
			<h2>Coaching Level:</h2>
			<p>
				What level of coaching would you like to receive?
			</p>

			<div class="radio">
				<label>
					<input type="radio" name="tennis_instructionLevel" class="tennis_instructionLevel" value="beginner" checked>
					Beginner
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="tennis_instructionLevel" class="tennis_instructionLevel" value="intermediate">
					Intermediate
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="tennis_instructionLevel" class="tennis_instructionLevel" value="advanced">
					Advanced
				</label>
			</div>

			<br>

		</div>
		<div class="col-sm-6">
			<h2>Health/Injuries</h2>
			<p>
				Do you have any injuries?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="tennis_injuries" class="tennis_injuries" value="no" dependentValue="false" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="tennis_injuries" class="tennis_injuries" value="yes" dependentValue="true" >
					Yes
				</label>
			</div>
			<p>
				If Yes, please list any injuries that you have.
				<br>
			</p>
			<textarea dependentOn="tennis_injuries" name="tennis_injuryInfo" id="tennis_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
	</div>
</div>