<a href="./public/img/iceskating.jpg" style="background-image:url(./public/img/iceskating.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="iceSkating_choiceNum">
<div class="activityDescription">
	<h1>Ice-Skating</h1>
	<p>
		Nothing says winter in the mountains quite like the vision of twirling around an ice rink. 
		Here in Aspen, there are several places to live out that dream. From the low-key Aspen Ice 
		Garden to the outdoor SK8 (aka Silver Circle rink), there is something for ice skaters of 
		all abilities in Aspen. 
	</p>
</div>
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">
				<p>
					<p><strong>Suggested Attire (layer to stay warm):</strong></p>
					<ul class="thin-text">
						<li>Long underwear</li>
						<li>Hat</li>
						<li>Gloves</li>
						<li>Scarf</li>
						<li>Thin socks</li>
						<li>Warm stretchy pants/leggings</li>
						<li>Windproof pants</li>
						<li>Windproof jacket</li>
						<li>Sunglasses</li>
						<li>Sunscreen</li>
						<li>Lip balm</li>
					</ul>
				</p>
				<p>
					<p><strong>Items you shound NOT bring/wear:</strong></p>
					<ul class="thin-text">
						<li>Jeans</li>
						<li>Thick socks</li>
					</ul>
				</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<p>
				Will you be bringing your own ice skates?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="iceSkating_equipment" id="iceSkating_equipment" value="bringing own" dependentValue="false" checked>
			    I am bringing my own
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="iceSkating_equipment" id="iceSkating_equipment" value="need provided" dependentValue="true">
			    I will need them provided
			  </label>
			</div>
			<br>
			<div class="form-group">
				<label for="iceSkating_shoeSize">If Yes, what is your shoe size?</label>
		  	<input dependentOn="iceSkating_equipment" id="iceSkating_shoeSize" name="iceSkating_shoeSize" type="text" class="form-control">
			</div>
		</div>
	</div>

	<hr class='activities'>
	<div class="col-sm-6">
		<h2>Experience</h2>
		<p>
			Have you ever ice-skated before?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="iceSkating_experience" class="iceSkating_experience" value="no" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="iceSkating_experience" class="iceSkating_experience" value="yes">
		    Yes
		  </label>
		</div>
		<br>

		<p>
			What is your comfort level on ice-skates (on a scale of 1-5, 5 being extremely comfortable)?
		</p>
		<div class="row">

			<?php for ($i=1; $i <= 5; $i++): ?>

			<div class="col-xs-2">
				<div class="radio">
				  <label>
				    <input type="radio" name="iceSkating_comfort" class="iceSkating_comfort" 
				    				value=<?php echo $i ?> <?php if($i === 1) {echo "checked";} ?>>
				    <?php echo $i ?>
				  </label>
				</div>
			</div>

			<?php endfor; ?>
		</div>
		<br>
		<p>
			Would you like to participate in a private lesson?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="iceSkating_lessons" class="iceSkating_lessons" value="yes" checked>
		    Yes
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="iceSkating_lessons" class="iceSkating_lessons" value="no">
		    No
		  </label>
		</div>
		<br>

		<p>
			Do you prefer to skate indoors or outdoors?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="iceSkating_preference" class="iceSkating_preference" value="indoors" checked>
		    Indoors
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="iceSkating_preference" class="iceSkating_preference" value="outdoors">
		    Outdoors
		  </label>
		</div>

	</div>
	<div class="col-sm-6">
		<h2>Health/Injuries</h2>
		<p>
			Do you have any Injuries?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="iceSkating_injuries" class="iceSkating_injuries" value="no" dependentValue="false" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="iceSkating_injuries" class="iceSkating_injuries" value="yes" dependentValue="true" >
		    Yes
		  </label>
		</div>
		<p>
			If Yes, please list any injuries that you have.
			<br>
		</p>
		<textarea dependentOn="iceSkating_injuries" name="iceSkating_injuryInfo" id="iceSkating_injuryInfo" class="form-control" rows="5" 
		placeholder="Required if you said yes to injuries"></textarea>
	</div>
</div>
