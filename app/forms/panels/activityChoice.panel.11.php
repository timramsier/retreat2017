<a href="./public/img/spa.jpg" style="background-image:url(./public/img/spa.jpg)" class="updateBackground"></a>
<input type="hidden" class="choiceNum" name="spa_choiceNum">
<br>
<div class="activityInputs">
	<hr class='activities'>
	<p>
			Please select the top two services you are interested in receiving.
	</p>
	<div class="row">
		<div class="col-sm-6 select-group" id="spaChoiceGroup">

			<div class="form-group">
				<div class="row">
					<div class="col-sm-2">
						<label for="spa_choice1">1st</label>
					</div>
					<div class="col-sm-10">
						<select class='form-control required' name="spa_choice1" id="spa_choice1">
								<option value="null">- Please Select One -</option>
				  			<option value="massage">Full Body Massage</option>
				  			<option value="facial">Facial</option>
				  			<option value="manicure">Manicure</option>
				  			<option value="pedicure">Pedicure</option>
					  </select>
					</div>
				</div>
			</div>	

			<div class="form-group">
				<div class="row">
					<div class="col-sm-2">
						<label for="spa_choice2">2nd</label>
					</div>
					<div class="col-sm-10">
						<select class='form-control required' name="spa_choice2" id="spa_choice2">
					  </select>
					</div>
				</div>
			</div>			
		</div>
	</div>

</div>

<script type="text/javascript">selectGroup("#spaChoiceGroup.select-group select");</script>
