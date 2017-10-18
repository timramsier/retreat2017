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
    <input type="text" name="officePhone" class="form-control input-sm required " id="officePhone" placeholder="Required" 
            value=<?php if (isset($_GET["officePhone"])) {echo $_GET["officePhone"];} ?>>
  </div>
</div>
<div class="col-sm-3">
  <div class="form-group">    
    <label for="mobilePhone">Mobile Phone <small><em>(Required)</em></small></label>
    <input type="text" name="mobilePhone" class="form-control input-sm required " id="mobilePhone" placeholder="Required" 
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
    <label for="city">Country</label>
      <select name="country" id="country" class="form-control bfh-countries" data-country="US"></select>
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
    <label for="state">State/Province</label>
    <input type="text" name="state" class="form-control input-sm required" id="state" placeholder="Required"
            value=<?php if (isset($_GET["state"])) {echo "'" . urldecode($_GET["state"]) . "'";} ?>>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="zip">Zip Code</label>
    <input type="text" name="zip" class="form-control input-sm required" id="zip" placeholder="Required" 
            value=<?php if (isset($_GET["zip"])) {echo "'" . urldecode($_GET["zip"]) . "'";} ?>>
  </div>  
</div>                  
