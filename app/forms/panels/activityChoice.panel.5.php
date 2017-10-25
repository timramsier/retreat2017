<a href="./public/img/horses.jpg" style="background-image:url(./public/img/horses.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="horsebackRiding_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<h5>Suggested Attire:</h5>
				<ul class="thin-text">
					<li>Light Layers</li>
					<li>Long Sleeved Shirt</li>
					<li>Long Pants (jeans recommended)</li>
					<li>Closed-toe shoes or boots</li>
					<li>Hat</li>
					<li>Gloves</li>
					<li>Sunscreen</li>
					<li>Sunglasses</li>
				</ul>
				<h5>Duration:</h5>
				<ul class="thin-text">
					<li>3 hours total time including transportation</li>
					<li>30 minutes of instruction and horse fitting (included above)</li>
					<li>30 minutes on trail (included above)</li>					
				</ul>
				<h5>Transportation:</h5>
				<p class="thin-text">
					Transportation provided from Resort to riding trail - 40 minute drive each way
				</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">

			<h3>Each participant will be provided with a horse and saddle.</h3>

			<h2>Experience</h2>
			<p>
				Have you ever been horseback riding before?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="horsebackRiding_experience" class="horsebackRiding_experience" value="no" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="horsebackRiding_experience" class="horsebackRiding_experience" value="yes">
					Yes
				</label>
			</div>
			<br>

			<p>
				What is your comfort level with horses (on a scale of 1-5, 5 being extremely comfortable)?
			</p>
			<div class="row">

				<?php for ($i=1; $i <= 5; $i++): ?>

				<div class="col-xs-2">
					<div class="radio">
						<label>
							<input type="radio" name="horsebackRiding_comfort" class="horsebackRiding_comfort" 
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
	<row class="row">
		<div class="col-sm-6">
			<h2>Health/Injuries</h2>
			<p>
				Do you have any injuries?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="horsebackRiding_injuries" class="horsebackRiding_injuries" value="no" dependentValue="false" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="horsebackRiding_injuries" class="horsebackRiding_injuries" value="yes" dependentValue="true" >
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
			<textarea dependentOn="horsebackRiding_injuries" name="horsebackRiding_injuryInfo" id="horsebackRiding_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
	</row>
</div>
