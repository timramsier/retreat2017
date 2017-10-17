<a href="./public/img/snowshoeing.jpg" style="background-image:url(./public/img/snowshoeing.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="snowshoeing_choiceNum">
<div class="activityInputs">
	<hr class='activities'>
	<h2>Equipment:</h2>
	<div class="row">
		<div class="col-sm-6 col-sm-push-6">
			<div class="alert alert-info">
				<p>
					<p><strong>Suggested Attire (layer to stay warm):</strong></p>
					<ul class="thin-text">
						<li>Insulated waterproof boots</li>
						<li>Long underwear</li>
						<li>Hat</li>
						<li>Gloves</li>
						<li>Scarf</li>
						<li>Thick wool socks</li>
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
						<li>Avoid wearing cotton</li>
						<li>Running/tennis shoes</li>
						<li>Jewelry</li>
						<li>Loose articles of clothing</li>
					</ul>
				</p>
			</div>
		</div>
		<div class="col-sm-6 col-sm-pull-6">
			<p>
				We recommend that you wear insulated, waterproof winter boots or waterproof, 
				leather, hiking boots.  If you need boots, please let us know (include shoe size).
			</p>
			<textarea name="snowshoeing_shoesNeeded" id="snowshoeing_shoesNeeded" class="form-control" rows="5" 
								placeholder="If left blank you will need to bring your own boots"></textarea>
			<br>
			<p>
				Do you want to use poles?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="snowshoeing_usePole" class="snowshoeing_usePole" value="yes" checked>
			    Yes
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="snowshoeing_usePole" class="snowshoeing_usePole" value="no">
			    No
			  </label>
			</div>

			<p>
				If Yes, do you need poles provided to you?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="snowshoeing_needPole" class="snowshoeing_needPole" value="no" dependentValue="false" checked>
			    No
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="snowshoeing_needPole" class="snowshoeing_needPole" value="yes"dependentValue="true" >
			    Yes
			  </label>
			</div>
			<label for="snowshoeing_height">If Yes, what is your height? <small>(in inches)</small></label>
			<div class="input-group">
		  	<input dependentOn="snowshoeing_needPole" name="snowshoeing_height" type="text" class="form-control">
		  	<span class="input-group-addon">inches</span>
			</div>

		</div>
	</div>

	<hr class='activities'>

	<div class="col-sm-6">
		<h2>Experience</h2>
		<p>
			Have you ever snowshoed?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="snowshoeing_experience" class="snowshoeing_experience" value="yes" checked>
		    Yes
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="snowshoeing_experience" class="snowshoeing_experience" value="no">
		    No
		  </label>
		</div>
		<br>
		<p>
			If, Yes, what is your level of ability?
		</p>
		<div class="radio">
		  <label>
		    <input dependentOn="snowshoeing_lessons" type="radio" name="snowshoeing_ability" class="snowshoeing_ability" value="beginner" checked>
		    Beginner
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input dependentOn="snowshoeing_lessons" type="radio" name="snowshoeing_ability" class="snowshoeing_ability" value="intermediate">
		    Intermediate
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input dependentOn="snowshoeing_lessons" type="radio" name="snowshoeing_ability" class="snowshoeing_ability" value="advanced">
		    Advanced
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
		    <input type="radio" name="snowshoeing_injuries" class="injuries" value="no"  dependentValue="false" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="snowshoeing_injuries" class="injuries" value="yes" dependentValue="true" >
		    Yes
		  </label>
		</div>
		<p>
			If Yes, please list any injuries that you have.
			<br>
		</p>
		<textarea dependentOn="snowshoeing_injuries" name="snowshoeing_injuryInfo" id="snowshoeing_injuryInfo" class="form-control" rows="5" 
		placeholder="Required if you said yes to injuries"></textarea>
	</div>
</div>
