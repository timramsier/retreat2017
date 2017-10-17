<a href="./public/img/flyfishing.jpg" style="background-image:url(./public/img/flyfishing.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="flyFishing_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<p>
					<p><strong>Suggested Attire (layer to stay warm):</strong></p>
					<ul class="thin-text">
						<li>Long sleeved shirt with a T-shirt</li>
						<li>Gloves that allow you to move your fingers freely</li>
						<li>Polypropylene bottoms (ski tights, running pants or sweat pants)</li>
						<li>Running shoes</li>
						<li>Brimmed hat</li>
						<li>Sunglasses</li>
					</ul>
				</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<p>
				Will you be bringing your own fly fishing equipment?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="flyFishing_equipment" id="flyFishing_equipment" value="bringing own" dependentValue="false" checked>
			    I am bringing my own
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="flyFishing_equipment" id="flyFishing_equipment" value="need provided" dependentValue="true">
			    I will need them provided
			  </label>
			</div>
			<br>
			<p>
				Please list the equipment you will need provided for you.  Please include your size(s) for all needed equipment 
				and apparel.  (i.e. fishing rod, waders, boots, jacket, vest, etc.)
				<br>
			</p>
			<textarea dependentOn="flyFishing_equipment" name="flyFishing_neededEquipment" id="flyFishing_neededEquipment" 
								class="form-control" rows="5" placeholder="Required if equipment is needed"></textarea>
		</div>
	</div>

	<hr class='activities'>
	<h2>Experience</h2>
	<div class="row">
		<div class="col-sm-6">
			<p>
				Have you ever fly fished before?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="flyFishing_experience" class="flyFishing_experience" value="no" checked>
			    No
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="flyFishing_experience" class="flyFishing_experience" value="yes">
			    Yes
			  </label>
			</div>
			<br>

			<p>
				How well do you swim (on a scale of 1-5, 5 being an advanced swimmer)?
			</p>
			<div class="row">

				<?php for ($i=1; $i <= 5; $i++): ?>

				<div class="col-xs-2">
					<div class="radio">
					  <label>
					    <input type="radio" name="flyFishing_swimming" class="flyFishing_swimming" 
					    				value=<?php echo $i ?> <?php if($i === 1) {echo "checked";} ?>>
					    <?php echo $i ?>
					  </label>
					</div>
				</div>

				<?php endfor; ?>
			</div>
		</div>
		<div class="col-sm-6"
			<p>
				Please let us know how we can help you prepare to fly fish!
				<br>
			</p>
			<textarea name="flyFishing_help" id="flyFishing_help" 
								class="form-control" rows="5" placeholder="Optional"></textarea>
		</div>

	</div>
<hr class='activities'>
	<h2>Health/Injuries</h2>
	<div class="row">
		<div class="col-sm-6">
			<p>
				Do you have any Injuries?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="flyFishing_injuries" class="flyFishing_injuries" value="no" dependentValue="false" checked>
			    No
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="flyFishing_injuries" class="flyFishing_injuries" value="yes" dependentValue="true" >
			    Yes
			  </label>
			</div>
		</div>
		<div class="col-sm-6"
			<p>
				If Yes, please list any injuries that you have.
				<br>
			</p>
			<textarea dependentOn="flyFishing_injuries" name="flyFishing_injuryInfo" id="flyFishing_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
	</div>
</div>
