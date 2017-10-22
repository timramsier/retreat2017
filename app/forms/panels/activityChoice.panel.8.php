<a href="./public/img/spa.jpg" style="background-image:url(./public/img/spa.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="spaMeadowood_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Treatment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<h5>Duration:</h5>
				<ul class="thin-text">
					<li>30 minute pre-treatment consultation</li>
					<li>1 hour pre-treatment</li>
				</ul>
				<h5>Notes</h5>
				<ul class="thin-text">
					<li>Arrive 15 minutes prior to your appointment time</li>
					<li>Missed spaMeadowood appointments will be billed back directly to you.</li>
				</ul>
				<h5>Transportation:</h5>
				<p class="thin-text">On property</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<p>
				Please select the type of service you are interested i receiving:
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="spaMeadowood_service" id="spaMeadowood_service" value="body massage" dependentValue="false" checked>
			   	Body Massage
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="spaMeadowood_service" id="spaMeadowood_service" value="facial" dependentValue="true">
			    Facial
			  </label>
			</div>
			<br>
			<p>What time of day do you prefer to have a spaMeadowood treatment?</p>
			<div class="checkbox-group">
				<div class="checkbox">
					<label>
						<input name="spaMeadowood_morning" type="checkbox" value="yes">
						Morning
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input name="spaMeadowood_afternoon" type="checkbox" value="yes">
						Afternoon
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="spaMeadowood_start">What is your preferred start time?</label>
				<input id="spaMeadowood_start" name="spaMeadowood_start" type="text" class="form-control" placeholder="Optional">
			</div>
		</div>
	</div>

	<hr class='activities'>
	<div class="row">
		<div class="col-sm-6">
			<h2>Health/Injuries</h2>
			<p>
				Do you have any Injuries?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="spaMeadowood_injuries" class="spaMeadowood_injuries" value="no" dependentValue="false" checked>
			    No
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="spaMeadowood_injuries" class="spaMeadowood_injuries" value="yes" dependentValue="true" >
			    Yes
			  </label>
			</div>
		</div>
		<div class="col-sm-6">
			<br />
			<p>
				If Yes, please list any injuries that you have.
				<br>
			</p>
			<textarea dependentOn="spaMeadowood_injuries" name="spaMeadowood_injuryInfo" id="spaMeadowood_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
	</div>
</div>
