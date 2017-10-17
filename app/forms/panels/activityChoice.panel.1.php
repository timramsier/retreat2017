<a img-index="1" href="./public/img/balloon.jpg" style="background-image:url(./public/img/balloon.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="balloon_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Experience:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<p>
					<p><strong>Suggested Attire:</strong></p>
					<ul class="thin-text">
						<li>Light Layers</li>
						<li>Flat, Closed-toe Shoes</li>
						<li>Sunglasses</li>
						<li>Sunscreen</li>
						<li>Hat</li>
					</ul>
				</p>
				<p>
					<p><strong>Duration:</strong></p>
					<ul>
						<li>Pick-up is at 6:00 am</li>
						<li>4.5 hours total</li>
						<li>Approximate 1-hour flight over the Napa Valley</li>
					</ul>
				</p>
				<p>
					<p><strong>Transportation:</strong></p>
					<p>Roundtrip transportation provided</p>
				</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<p>
				Do you experience any of the following? <br/>
				<ul style='list-style:none; padding: 0;'>
					<li>Fear of heights</li>
					<li>Vertigo / Dizziness</li>
					<li>Motion Sickness</li>
					<li>Altitude related issues</li>
					<li>Other Concerns</li>
				</ul>
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="balloon_comfort" id="balloon_comfort" value="does not experience any" dependentValue="false" checked>
			    No, I do not experience any condition
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="balloon_comfort" id="balloon_comfort" value="does experience one or more" dependentValue="true">
			    Yes, I experience one or more condition
			  </label>
			</div>
			<br>
			<p>
				Please list which conditions you experience from above and any important details.<br>
			</p>
			<textarea dependentOn="balloon_comfort" name="balloon_comfortInfo" id="balloon_comfortInfo" 
								class="form-control" rows="5" placeholder="Required if you experience any of the above"></textarea>
		</div>
	</div>

	<hr class='activities'>
		<h2>Health/Injuries</h2>
		<p>
			Do you have any Injuries?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="balloon_injuries" class="balloon_injuries" value="no" dependentValue="false" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="balloon_injuries" class="balloon_injuries" value="yes" dependentValue="true" >
		    Yes
		  </label>
		</div>
		<p>
			If Yes, please list any injuries that you have.
			<br>
		</p>
		<textarea dependentOn="balloon_injuries" name="balloon_injuryInfo" id="balloon_injuryInfo" class="form-control" rows="5" 
		placeholder="Required if you said yes to injuries"></textarea>
	</div>
</div>
