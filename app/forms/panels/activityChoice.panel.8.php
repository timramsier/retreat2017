<a href="./public/img/hiking.jpg" style="background-image:url(./public/img/hiking.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="hiking_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<p><em>
					While no specific equipment is necessary to hike, please note the recommended attire below.
				</em></p>
				<p>
					<p><strong>Suggested Attire (layer to stay warm):</strong></p>
					<ul class="thin-text">
						<li>Insulated waterproof boots (or waterproof, leather hiking boots)</li>
						<li>Hat</li>
						<li>Gloves</li>
						<li>Scarf</li>
						<li>Thick wool socks</li>
						<li>Windproof pants</li>
						<li>Windproof jacket</li>
						<li>Sunglasses (or goggles)</li>
						<li>Sunscreen</li>
						<li>Lip balm</li>
					</ul>
				</p>
				<p>
					<p><strong>Items you shound NOT bring/wear:</strong></p>
					<ul class="thin-text">
						<li>Avoid wearing cotton</li>
						<li>Running/tennis shoes</li>
					</ul>
				</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<p>
				Will you be bringing your own hiking equipment?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="hiking_equipment" id="hiking_equipment" value="bringing own" dependentValue="false" checked>
			    I am bringing my own
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="hiking_equipment" id="hiking_equipment" value="need provided" dependentValue="true">
			    I will need them provided
			  </label>
			</div>
			<br>
			<p>
				Please list the equipment you will need provided for you.  Please include your size(s) for all 
				needed equipment and apparel.  (i.e. boots, poles, etc.)
				<br>
			</p>
			<textarea dependentOn="hiking_equipment" name="hiking_neededEquipment" id="hiking_neededEquipment" 
								class="form-control" rows="5" placeholder="Required if equipment is needed"></textarea>
		</div>
	</div>

	<hr class='activities'>
	<h2>Experience</h2>
	<div class="row">
		<div class="col-sm-6">
			<p>
				Have you ever hiked in high altitude?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="hiking_experience" class="hiking_experience" value="no" checked>
			    No
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="hiking_experience" class="hiking_experience" value="yes">
			    Yes
			  </label>
			</div>
			<br>

			<p>
				How well do you hike in high altitude (on a scale of 1-5, 5 being comfortable)?
			</p>
			<div class="row">

				<?php for ($i=1; $i <= 5; $i++): ?>

				<div class="col-xs-2">
					<div class="radio">
					  <label>
					    <input type="radio" name="hiking_hikingComfort" class="hiking_hikingComfort " 
					    				value=<?php echo $i ?> <?php if($i === 1) {echo "checked";} ?>>
					    <?php echo $i ?>
					  </label>
					</div>
				</div>

				<?php endfor; ?>
			</div>
		</div>
		<div class="col-sm-6">
			<p>
				If you plan to hike, please let us know how we can help you prepare!
				<br>
			</p>
			<textarea name="hiking_help" id="hiking_help" 
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
			    <input type="radio" name="hiking_injuries" class="hiking_injuries" value="no" dependentValue="false" checked>
			    No
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="hiking_injuries" class="hiking_injuries" value="yes" dependentValue="true" >
			    Yes
			  </label>
			</div>
		</div>
		<div class="col-sm-6"
			<p>
				If Yes, please list any injuries that you have.
				<br>
			</p>
			<textarea dependentOn="hiking_injuries" name="hiking_injuryInfo" id="hiking_injuryInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to injuries"></textarea>
		</div>
	</div>
</div>
