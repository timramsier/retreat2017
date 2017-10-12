<a img-index="1" href="./public/img/skiing.jpg" style="background-image:url(./public/img/skiing.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="skiing_choiceNum">
<div class="activityDescription">
	<h1>Skiing</h1>
	<p>
		Aspen Mountain is just steps away from The Little Nell Hotel…literally out the back door of the 
		resort.  The mountain is known for its intermediate and expert-level ski runs.  (Aspen Mountain 
		is not a beginner’s mountain.)  At Aspen Mountain you can ski down the same runs that have hosted 
		numerous World Cup races; it’s no wonder this mountain is a legend.  
	</p>
	<p>
		If you plan to ski, please let us know how we can help you prepare to hit the slopes!
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
						<li>Jewelry</li>
						<li>Loose articles of clothing</li>
					</ul>
				</p>
			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<p>
				Will you be bringing your own skiing equipment?
			</p>
			<div class="radio">
			  <label>
			    <input type="radio" name="skiing_equipment" id="skiing_equipment" value="bringing own" dependentValue="false" checked>
			    I am bringing my own
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="skiing_equipment" id="skiing_equipment" value="need provided" dependentValue="true">
			    I will need it provided
			  </label>
			</div>
			<br>
			<p>
				Please list the equipment you will need provided for you.  Please include your size(s) for 
				all needed equipment and apparel.  (i.e. skis, boots, poles, helmet, gloves, goggles, etc.)<br>
			</p>
			<textarea dependentOn="skiing_equipment" name="skiing_neededEquipment" id="skiing_neededEquipment" 
								class="form-control" rows="5" placeholder="Required if equipment is needed"></textarea>
		</div>
	</div>

	<hr class='activities'>
	<div class="col-sm-6">
		<h2>Lessons</h2>
		<p>
			Would you like to receive a private lesson?
		</p>
		<div class="radio">
		  <label>
		    <input type="radio" name="skiing_lessons" class="skiing_lessons" value="yes" dependentValue="true" checked>
		    Yes
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="skiing_lessons" class="skiing_lessons" value="no" dependentValue="false">
		    No
		  </label>
		</div>
		<br>
		<p>
			If Yes, what level of skier are you?
		</p>
		<div class="radio">
		  <label>
		    <input dependentOn="skiing_lessons" type="radio" name="skiing_skillLevel" class="skiing_skillLevel" value="beginner" checked>
		    Beginner
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input dependentOn="skiing_lessons" type="radio" name="skiing_skillLevel" class="skiing_skillLevel" value="intermediate">
		    Intermediate
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input dependentOn="skiing_lessons" type="radio" name="skiing_skillLevel" class="sskiing_killLevel" value="advanced">
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
		    <input type="radio" name="skiing_injuries" class="skiing_injuries" value="no" dependentValue="false" checked>
		    No
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="skiing_injuries" class="skiing_injuries" value="yes" dependentValue="true" >
		    Yes
		  </label>
		</div>
		<p>
			If Yes, please list any injuries that you have.
			<br>
		</p>
		<textarea dependentOn="skiing_injuries" name="skiing_injuryInfo" id="skiing_injuryInfo" class="form-control" rows="5" 
		placeholder="Required if you said yes to injuries"></textarea>
	</div>
</div>
