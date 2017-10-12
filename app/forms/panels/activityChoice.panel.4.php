<a href="./public/img/dogsledding.jpg" style="background-image:url(./public/img/dogsledding.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="dogSledding_choiceNum">
<div class="activityDescription">
	<h1>Dog-Sledding</h1>
	<p>
		If this is your first time visiting Aspen, you are about to embark on a great winter 
		adventure. A dog sled ride is an exciting journey through the pristine Snowmass 
		backcountry. Each sled is pulled by 8-10 Alaskan Husky sled dogs and are guided by 
		an experienced musher. The dogs are born and bred to run and they love the thrill 
		of the run just as much as you will. Whether sunny or snowing, you will experience 
		an Aspen/Snowmass wilderness adventure as never before.  If you have never experienced 
		dog-sledding this is a must.
	</p>
	<p>
		If you plan to dog sled, please let us know how we can help you prepare!
	</p>
</div>
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="alert alert-info">
		<h3>While no specific equipment is necessary to dog-sled, please note the recommended attire below:</h3>
		<p>
			<em>
				Wearing items against our recommendation puts you at risk of exposure. Remember, if you are not warm your experience no 
				longer becomes an enjoyable one. <span style="text-decoration:underline">Please do not wear the items we say that you should not.</span>
			</em>
		</p>
		<div class="row">
			<div class="col-sm-6">
				<p>
					<p><strong>Suggested Attire (layer to stay warm):</strong></p>
					<ul class="thin-text">
						<li>Insulated waterproof boots</li>
						<li>Long underwear</li>
						<li>Hat (warm torque/beanie that covers your ears)</li>
						<li>Gloves</li>
						<li>Scarf (or something to cover your face)</li>
						<li>Thick wool socks</li>
						<li>Windproof pants</li>
						<li>Windproof jacket</li>
						<li>Sunglasses (or goggles)</li>
						<li>Sunscreen</li>
						<li>Lip balm</li>
					</ul>
				</p>
			</div>
			<div class="col-sm-6">
				<p>
					<p>
						<strong>Items you shound NOT bring/wear.</strong>
					</p>
					<ul class="thin-text">
						<li>Leggings without snow pants</li>
						<li>Jeans even with snow pants</li>
						<li>Leggings underneath jeans</li>
						<li>High heeled boots/shoes/wedges</li>
						<li>Sneakers/tennis shoes</li>
						<li>Cottons socks(if it's not a winter sock, don't wear it)</li>
						<li>Slipper style boots (such as UGGS)</li>
						<li>Rubber boots (such as Hunters)</li>
						<li>Helmets (they can cause injury to other people sitting in the sled)</li>
						<li>Ski boots</li>
						<li>Large bags</li>
						<li>Dog treats</li>
					</ul>
				</p>
			</div>
		</div>
	</div>
	<hr class='activities'>
	<div class="col-sm-6">
		<h2>Experience:</h2>
		<p>
			What is your comfort level with dogs/animals (on a scale of 1-5, 5 being extremely afraid)?
		</p>
		<div class="row">


			<?php for ($i=1; $i <= 5; $i++): ?>

			<div class="col-xs-2">
				<div class="radio">
				  <label>
				    <input type="radio" name="dogSledding_animalComfort" class="dogSledding_animalComfort" 
				    				value=<?php echo $i ?> <?php if($i === 1) {echo "checked";} ?>>
				    <?php echo $i ?>
				  </label>
				</div>
			</div>

			<?php endfor; ?>
		</div>
		<br>
		<p>
			Have you ever been dog-sledding?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="dogSledding_experience" class="dogSledding_experience" value="no" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="dogSledding_experience" class="dogSledding_experience" value="yes">
		    Yes
		  </label>
		</div>
		<br>
	</div>
	<div class="col-sm-6">
		<h2>Health/Injuries</h2>
		<p>
			Do you have any Injuries?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="dogSledding_injuries" class="dogSledding_injuries" value="no"  dependentValue="false" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="dogSledding_injuries" class="dogSledding_injuries" value="yes" dependentValue="true" >
		    Yes
		  </label>
		</div>
		<p>
			If Yes, please list any injuries that you have.
			<br>
		</p>
		<textarea dependentOn="dogSledding_injuries" name="dogSledding_injuryInfo" id="dogSledding_injuryInfo" class="form-control" rows="5" 
		placeholder="Required if you said yes to injuries"></textarea>

	</div>





</div>
