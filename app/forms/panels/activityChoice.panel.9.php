<a href="./public/img/croquet.jpg" style="background-image:url(./public/img/croquet.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="croquet_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<h5>Required Attire:</h5>
				<ul class="thin-text">
					<li>White collared shirt for men</li>
					<li>White shirt for women</li>
					<li>White or light beige pants or shorts</li>
					<li>Flat-soled shoes ONLY (no wedges)</li>
				</ul>
				<h5>Duration:</h5>
				<ul class="thin-text">
          <li>1-hour lesson is available</li>
          <li>20-minute rounds</li>
        </ul> 
				<h5>Transportation:</h5>
				<p class="thin-text">On property</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
      <h3>Each participant will be provided with mallets and balls.</h3>
			<h2>Health/Injuries</h2>
			<p>
				Do you have any Injuries?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="croquet_injuries" class="croquet_injuries" value="no" dependentValue="false" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="croquet_injuries" class="croquet_injuries" value="yes" dependentValue="true" >
					Yes
				</label>
			</div>
			<p>
				If Yes, please list any injuries that you have.
				<br>
			</p>
			<textarea dependentOn="croquet_injuries" name="croquet_injuryInfo" id="croquet_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
	</div>
</div>
