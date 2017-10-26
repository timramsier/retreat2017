<a href="./public/img/wine.jpg" style="background-image:url(./public/img/wine.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="wine_choiceNum">
<br>
<div class="activityInputs">
	<hr class='activities'>
	<div class="row">
		<div class="col-sm-12">
			<h2>Equipment:</h2>
			<h3>Each participant will be provided select wines, crackers, a notepad and pen, and a tasting mat.</h3>
			<h2>Health</h2>
		</div>
		<div class="col-sm-5 col-sm-push-7">
			<div class="alert alert-info">

				<h5>Suggested Attire:</h5>
				<ul class="thin-text">
					<li>Casual Dress</li>
				</ul>

				<h5>Duration:</h5>
				<p class="thin-text">1 hour</p>

				<h5>Transportation:</h5>
				<p class="thin-text">On property</p>

			</div>
		</div>
		<div class="col-sm-7 col-sm-pull-5">
			<p>
				Do you have any food allergies or dietary restrictions?
			</p>
			<div class="radio">
				<label>
					<input type="radio" name="wine_foodRestriction" class="wine_foodRestriction" value="no" dependentValue="false" checked>
					No
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="wine_foodRestriction" class="wine_foodRestriction" value="yes" dependentValue="true" >
					Yes
				</label>
			</div>
			<p>
				If Yes, please list any food allergies or dietary restrictions.
				<br>
			</p>
			<textarea dependentOn="wine_foodRestriction" name="wine_foodRestrictionInfo" id="wine_foodRestrictionInfo" class="form-control" rows="5" 
			placeholder="Required if you said yes to food allergies or dietary restrictions"></textarea>
		</div>
	</div>
</div>
