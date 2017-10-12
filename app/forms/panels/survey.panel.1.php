<div class="col-sm-6">
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" class="form-control input-sm required" id="firstName" placeholder="Required" 
            value=<?php if (isset($_GET["firstName"])) {echo "'" . urldecode($_GET["firstName"]) . "'";} ?>>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" class="form-control input-sm required" id="lastName" placeholder="Required" 
            value=<?php if (isset($_GET["lastName"])) {echo "'" . urldecode($_GET["lastName"]) . "'";} ?>>
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="company">Company</label>
    <input type="text" name="company" class="form-control input-sm required" id="company" placeholder="Required" 
            value=<?php if (isset($_GET["company"])) {echo "'" . urldecode($_GET["company"]) . "'";} ?>>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control input-sm required" id="title" placeholder="Required" 
            value=<?php if (isset($_GET["title"])) {echo "'" . urldecode($_GET["title"]) . "'";} ?>>
  </div>
</div>

<div class="col-sm-3">
  <div class="form-group">
    <label for="officePhone">Office Phone <small><em>(Required)</em></small></label>
    <input type="text" name="officePhone" class="form-control input-sm required bfh-phone" id="officePhone" data-format="+1 (ddd) ddd-dddd"
            value=<?php if (isset($_GET["officePhone"])) {echo $_GET["officePhone"];} ?>>
  </div>
</div>
<div class="col-sm-3">
  <div class="form-group">    
    <label for="mobilePhone">Mobile Phone <small><em>(Required)</em></small></label>
    <input type="text" name="mobilePhone" class="form-control input-sm required bfh-phone" id="mobilePhone" data-format="+1 (ddd) ddd-dddd"
            value=<?php if (isset($_GET["mobilePhone"])) {echo "'" . urldecode($_GET["mobilePhone"]) . "'";} ?>>
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" name="email" class="form-control input-sm required" id="email" placeholder="Required" 
            value=<?php if (isset($_GET["email"])) {echo "'" . urldecode($_GET["email"]) . "'";} ?>>
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="address1">Address Line 1 <small><em>Street address, P. O. box, company name, c/o</em></small></label>
    <input type="text" name="address1" class="form-control input-sm required" id="address1" placeholder="Required"
            value=<?php if (isset($_GET["address1"])) {echo "'" . urldecode($_GET["address1"]) . "'";} ?>>
  </div>
  <div class="form-group">
    <label for="address2">Address Line 2 <small><em>Apartment, suite, unit, building, floor, etc.</em></small></label>
    <input type="text" name="address2" class="form-control input-sm" id="address2" placeholder="Optional"
            value=<?php if (isset($_GET["address2"])) {echo "'" . urldecode($_GET["address2"]) . "'";} ?>>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" name="city" class="form-control input-sm required" id="city" placeholder="Required"
            value=<?php if (isset($_GET["city"])) {echo "'" . urldecode($_GET["city"]) . "'";} ?>>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="State">State</label>
      <select name="state" class="form-control input-sm" id="state">
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "AL"){echo "selected";} ?> value="AL">Alabama</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "AK"){echo "selected";} ?> value="AK">Alaska</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "AZ"){echo "selected";} ?> value="AZ">Arizona</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "AR"){echo "selected";} ?> value="AR">Arkansas</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "CA"){echo "selected";} ?> value="CA">California</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "CO"){echo "selected";} ?> value="CO">Colorado</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "CT"){echo "selected";} ?> value="CT">Connecticut</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "DE"){echo "selected";} ?> value="DE">Delaware</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "DC"){echo "selected";} ?> value="DC">District Of Columbia</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "FL"){echo "selected";} ?> value="FL">Florida</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "GA"){echo "selected";} ?> value="GA">Georgia</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "HI"){echo "selected";} ?> value="HI">Hawaii</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "ID"){echo "selected";} ?> value="ID">Idaho</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "IL"){echo "selected";} ?> value="IL">Illinois</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "IN"){echo "selected";} ?> value="IN">Indiana</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "IA"){echo "selected";} ?> value="IA">Iowa</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "KS"){echo "selected";} ?> value="KS">Kansas</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "KY"){echo "selected";} ?> value="KY">Kentucky</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "LA"){echo "selected";} ?> value="LA">Louisiana</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "ME"){echo "selected";} ?> value="ME">Maine</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "MD"){echo "selected";} ?> value="MD">Maryland</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "MA"){echo "selected";} ?> value="MA">Massachusetts</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "MI"){echo "selected";} ?> value="MI">Michigan</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "MN"){echo "selected";} ?> value="MN">Minnesota</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "MS"){echo "selected";} ?> value="MS">Mississippi</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "MO"){echo "selected";} ?> value="MO">Missouri</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "MT"){echo "selected";} ?> value="MT">Montana</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "NE"){echo "selected";} ?> value="NE">Nebraska</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "NV"){echo "selected";} ?> value="NV">Nevada</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "NH"){echo "selected";} ?> value="NH">New Hampshire</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "NJ"){echo "selected";} ?> value="NJ">New Jersey</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "NM"){echo "selected";} ?> value="NM">New Mexico</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "NY"){echo "selected";} ?> value="NY">New York</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "NC"){echo "selected";} ?> value="NC">North Carolina</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "ND"){echo "selected";} ?> value="ND">North Dakota</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "OH"){echo "selected";} ?> value="OH">Ohio</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "OK"){echo "selected";} ?> value="OK">Oklahoma</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "OR"){echo "selected";} ?> value="OR">Oregon</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "PA"){echo "selected";} ?> value="PA">Pennsylvania</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "RI"){echo "selected";} ?> value="RI">Rhode Island</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "SC"){echo "selected";} ?> value="SC">South Carolina</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "SD"){echo "selected";} ?> value="SD">South Dakota</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "TN"){echo "selected";} ?> value="TN">Tennessee</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "TX"){echo "selected";} ?> value="TX">Texas</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "UT"){echo "selected";} ?> value="UT">Utah</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "VT"){echo "selected";} ?> value="VT">Vermont</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "VA"){echo "selected";} ?> value="VA">Virginia</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "WA"){echo "selected";} ?> value="WA">Washington</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "WV"){echo "selected";} ?> value="WV">West Virginia</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "WI"){echo "selected";} ?> value="WI">Wisconsin</option>
        <option <?php if(isset($_GET["state"]) && $_GET["state"] === "WY"){echo "selected";} ?> value="WY">Wyoming</option>
      </select>       
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="zip">Zip Code</label>
    <input type="text" name="zip" class="form-control input-sm required" id="zip" placeholder="Required" 
            value=<?php if (isset($_GET["zip"])) {echo "'" . urldecode($_GET["zip"]) . "'";} ?>>
  </div>  
</div>                  
