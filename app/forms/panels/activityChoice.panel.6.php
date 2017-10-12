<a href="./public/img/skeetshooting.jpg" style="background-image:url(./public/img/skeetshooting.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="skeetShooting_choiceNum">
<div class="activityDescription">
	<h1>Trap & Skeet Shooting</h1>
	<p>
		Located just a few miles from Aspen is one of Colorado’s finest shooting clubs. Upon arrival at 
		the club your instructor will begin with an introduction to shooting which includes shotgun safety, 
		proper gun handling, and an overview of the sport.  You will be coached on skill during the live fire.  
		There will be an opportunity to shoot on both types of fields - trap range and skeet range. 
	</p>
	<p>
		<ul class="list-unstyled">
			<li>
				<strong>Trap Shooting</strong> 
				– The targets are launched from a single “house” or machine.
			</li>
			<li>
				<strong>Skeet Shooting</strong> 
				– Targets are launched from two “houses” in somewhat “sideways” 
				path that intersect in front of the shooter.
			</li>
	</p>
</div>
<div class="activityInputs">
	<hr class='activities'>
	<h2>Experience:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<p><em>
					While no specific equipment is necessary to shoot, 
					please note the recommended attire below.
				</em></p>
				<p>
					<p><strong>Suggested Attire (layer to stay warm):</strong></p>
					<ul class="thin-text">
						<li>Pants/jeans</li>
						<li>Running/tennis shoes or flt/comfortable shoes (closed toe only)</li>
						<li>Hat</li>
						<li>Ear protection (will be provided)</li>
						<li>Eye protection (will be provided)</li>
						<li>Gloves (will be provided)</li>
					</ul>
				</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<p>
				Have you ever shot a rifle type gun?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="skeetShooting_experience" id="skeetShooting_experience" value="no" checked>
			    No
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="skeetShooting_experience" id="skeetShooting_experience" value="yes">
			    Yes
			  </label>
			</div>
			<br>
		<p>
			What is your comfort level in handling a rifle (on a scale of 1-5, 5 being extremely comfortable)?
		</p>
		<div class="row">


			<?php for ($i=1; $i <= 5; $i++): ?>

			<div class="col-xs-2">
				<div class="radio">
				  <label>
				    <input type="radio" name="skeetShooting_rifleComfort" class="skeetShooting_rifleComfort" 
				    				value=<?php echo $i ?> <?php if($i === 1) {echo "checked";} ?>>
				    <?php echo $i ?>
				  </label>
				</div>
			</div>

			<?php endfor; ?>
		</div>

		</div>
	</div>

	<hr class='activities'>
	<div class="col-sm-6">
		<h2>Health</h2>
		<p>
			Can you hold up to 15 lbs comfortably?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="skeetShooting_hold15lbs" class="skeetShooting_hold15lbs" value="yes" checked>
		    Yes
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="skeetShooting_hold15lbs" class="skeetShooting_hold15lbs" value="no">
		    No
		  </label>
		</div>
		<br>

		<p>
			Do you wear prescription eyeglasses?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="skeetShooting_eyeGlasses" class="skeetShooting_eyeGlasses" value="no" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="skeetShooting_eyeGlasses" class="skeetShooting_eyeGlasses" value="yes">
		    Yes
		  </label>
		</div>
		<br>

		<p>
			Are you sensitive to loud noises?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="skeetShooting_loudNoises" class="skeetShooting_loudNoises" value="no" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="skeetShooting_loudNoises" class="skeetShooting_loudNoises" value="yes">
		    Yes
		  </label>
		</div>
		<br>

	</div>
	<div class="col-sm-6">
		<h2>Injuries</h2>
		<p>
			Do you have any Injuries?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="skeetShooting_injuries" class="skeetShooting_injuries" value="no" dependentValue="false" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="skeetShooting_injuries" class="skeetShooting_injuries" value="yes" dependentValue="true" >
		    Yes
		  </label>
		</div>
		<p>
			If Yes, please list any injuries that you have.
			<br>
		</p>
		<textarea dependentOn="skeetShooting_injuries" name="skeetShooting_injuryInfo" id="skeetShooting_injuryInfo" class="form-control" rows="5" 
		placeholder="Required if you said yes to injuries"></textarea>
	</div>
</div>
