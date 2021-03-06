<div class='origin-toggle'>
  <div class="col-xs-12">
    <div class='row'>
      <div class="alert alert-info" id="private-note">
        <p>
          <strong>Note:</strong> Please forward your travel itinerary and flight information to Emily Somers 
          <strong><a href="mailto:emily.somers@iac.com">emily.somers@iac.com</a></strong>.
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label for="arrivalDate">Arrival Date & Time <small><em>(Required)</em></small></label>
        <div class='input-group date datetime-picker'>
          <input type='text' name="arrivalDate" class="form-control input-sm required" id="arrivalDate" />
          <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <div class="form-group">
          <label for="arrivalAirport">Arrival Airport</label>
          <input type="text" name="arrivalAirport" class="form-control input-sm required" id="arrivalAirport" placeholder="Required" 
                  value=<?php if (isset($_GET["arrivalAirport"])) {echo "'" . urldecode($_GET["arrivalAirport"]) . "'";} ?>>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="form-group">
          <label for="arrivalFlightNum">Arrival Flight #</label>
          <input type="text" name="arrivalFlightNum" class="form-control input-sm required" id="arrivalFlightNum" placeholder="Required" 
                  value=<?php if (isset($_GET["arrivalFlightNum"])) {echo "'" . urldecode($_GET["arrivalFlightNum"]) . "'";} ?>>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
          <label for="arrivalAirline">Arrival Airline</label>
          <input type="text" name="arrivalAirline" class="form-control input-sm required" id="arrivalAirline" placeholder="Required" 
                  value=<?php if (isset($_GET["arrivalAirline"])) {echo "'" . urldecode($_GET["arrivalAirline"]) . "'";} ?>>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form-group">
          <label for="originCity">Origin City of Arrival Flight</label>
          <input type="text" name="originCity" class="form-control input-sm required" id="originCity" placeholder="Required" 
                  value=<?php if (isset($_GET["originCity"])) {echo "'" . urldecode($_GET["originCity"]) . "'";} ?>>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="arrivalConnectionInfo">Arrival Connection Info</label>
      <textarea rows="3" name="arrivalConnectionInfo" class="form-control input-sm" id="arrivalConnectionInfo" placeholder="Optional"></textarea>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label for="departureDate">Departure Date & Time <small><em>(Required)</em></small></label>
        <div class='input-group date datetime-picker'>
          <input type='text' name="departureDate" class="form-control input-sm required" id="departureDate" />
          <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <div class="form-group">
          <label for="departureAirport">Departure Airport</label>
          <input type="text" name="departureAirport" class="form-control input-sm required" id="departureAirport" placeholder="Required" 
                  value=<?php if (isset($_GET["departureAirport"])) {echo "'" . urldecode($_GET["departureAirport"]) . "'";} ?>>
        </div>
      </div>

      <div class="col-xs-6">
        <div class="form-group">
          <label for="departureFlightNum">Departure Flight #</label>
          <input type="text" name="departureFlightNum" class="form-control input-sm required" id="departureFlightNum" placeholder="Required" 
                  value=<?php if (isset($_GET["departureFlightNum"])) {echo "'" . urldecode($_GET["departureFlightNum"]) . "'";} ?>>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
          <label for="departureAirline">Departure Airline</label>
          <input type="text" name="departureAirline" class="form-control input-sm required" id="departureAirline" placeholder="Required" 
                  value=<?php if (isset($_GET["departureAirline"])) {echo "'" . urldecode($_GET["departureAirline"]) . "'";} ?>>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form-group">
          <label for="destinationCity">Destination City of Departure Flight</label>
          <input type="text" name="destinationCity" class="form-control input-sm required" id="destinationCity" placeholder="Required" 
                  value=<?php if (isset($_GET["destinationCity"])) {echo "'" . urldecode($_GET["destinationCity"]) . "'";} ?>>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="departureConnectionInfo">Departure Connection Info</label>
      <textarea rows="3" name="departureConnectionInfo" class="form-control input-sm" id="departureConnectionInfo" placeholder="Optional"></textarea>
    </div>
  </div>

</div>
