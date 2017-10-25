


<div class="alert alert-info">
	<h3>
		The below activities are being offered on Thursday, December 1, 2016.  You are encouraged to 
		select an activity that you can do with your friends and colleagues. 
	</h3>
 
	<p class="text-column-2">
		<?php	foreach ($activityTypes as $key=>$activity) {
			if ($activity !== 'No Activity') {
				echo "<span data-toggle='tooltip' data-placement='top' title='"
				.strip_tags($activityDesc[$key + 1]).
				"'>$activity</span><br>";
			}
		}?>
	</p>

</div>
<h3>
	Please select your top three activities, in order of preference.  We will do our best to 
	accommodate your preferences; however, please understand we cannot guarantee 
	availability.  Our goal is to ensure you are able to participate in one activity.
</h3>

<div class="row">
	<div class="col-sm-6 select-group" id="activitiesGroup">

		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label for="choice1">1st</label>
				</div>
				<div class="col-sm-10">
					<select class='form-control required' name="choice1" id="choice1">
								<option value="null">- Please Select One -</option>
				  			<?php $i = 0;	foreach ($activityTypes as $activity) {echo "<option value=$i>$activity</option>"; $i++;}?>
				  </select>
				</div>
			</div>
		</div>	

		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label for="choice2">2nd</label>
				</div>
				<div class="col-sm-10">
					<select class='form-control' name="choice2" id="choice2">
				  </select>
				</div>
			</div>
		</div>	

		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label for="choice3">3rd</label>
				</div>
				<div class="col-sm-10">
					<select class='form-control' name="choice3" id="choice3">
				  </select>
				</div>
			</div>
		</div>			

	</div>
	<!-- <div class="col-sm-6">
		<div class="alert alert-warning">
			If weather conditions are not suitable for the activity/ies of your choosing, other activities will be offered.  
			Thanks for your understanding.
		</div>
	</div>
</div>
<br>
<br>
<h3>
	Please let us know what time you are available to participate:
	<br><small>(required)</small>
</h3>
<div class="checkbox-group required">
	<div class="checkbox">
	  <label>
	    <input name="morning" type="checkbox" value="morning">
	    Morning (approximately 8:00 am - 11:00 am)
	  </label>
	</div>
	<div class="checkbox">
	  <label>
	    <input name="midDay" type="checkbox" value="midDay">
	    Mid-Day (approximately 11:00 am – 2:00 pm)
	  </label>
	</div>
	<div class="checkbox">
	  <label>
	    <input name="afternoon" type="checkbox" value="afternoon">
	    Afternoon (approximately 2:00 pm – 5:00 pm)
	  </label>
	</div> -->
</div>