<?php
  ob_start();
  include_once('partials/header.php');
  $id = $_SESSION['userid'] ?? 0;
  if(!$id){
      header("location: index.php");
      die();
  }
?>


<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Post a Vehicle</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Post a Vehicle</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Post-vehicle-->
<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> <img src="assets/images/222x172.jpg" alt="image">
        <div class="upload_newlogo">
          <input name="upload" type="file">
        </div>
      </div>
      <div class="dealer_info">
        <h5>Autospot Used Cars Center </h5>
        <p>P.1225 N Broadway Ave <br>
          Oklahoma City, OK  1234-5678-090</p>
      </div>
    </div>
    <div class="row">
      
      <!-- Profile nav -->
      <?php 
        include_once('profile-nav.php');
      ?>
      <!-- Profile nav -->


      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Post a New Vehicle</h5>
          <form action="#" method="get">
            <div class="form-group">
              <label class="control-label">Vehicles Title</label>
              <input class="form-control white_bg" id="VehiclesTitle" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Select Make</label>
              <div class="select">
                <select class="form-control white_bg">
                  <option>Select Brand</option>
                  <option>Brand 1</option>
                  <option>Brand 2</option>
                  <option>Brand 3</option>
                  <option>Brand 4</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Model</label>
              <div class="select">
                <select class="form-control white_bg">
                  <option>Select Model</option>
                  <option>Model 2</option>
                  <option>Model 3</option>
                  <option>Model 4</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Vehicles Version</label>
              <div class="select">
                <select class="form-control white_bg">
                  <option>Version</option>
                  <option>Version 1.1</option>
                  <option>Version 1.2</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Vehicle Overview  Description</label>
              <textarea class="form-control white_bg" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">Price ($)</label>
              <input class="form-control white_bg" id="Price" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Upload Images  ( size = 900 x 560 )</label>
              <div class="vehicle_images">
                <div><img src="assets/images/900x560.jpg" alt="image"></div>
                <div><img src="assets/images/900x560.jpg" alt="image"></div>
                <div class="upload_more_img">
                  <input name="upload" type="file">
                </div>
              </div>
            </div>
            <div class="gray-bg field-title">
              <h6>Basic Info</h6>
            </div>
            <div class="form-group">
              <label class="control-label">Model Year</label>
              <input class="form-control white_bg" id="year" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">No. of Owners</label>
              <input class="form-control white_bg" id="owners" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">KMs Driven</label>
              <input class="form-control white_bg" id="kws" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Fuel Type</label>
              <input class="form-control white_bg" id="fuel" type="text">
            </div>
            <div class="gray-bg field-title">
              <h6>Technical Specification</h6>
            </div>
            <div class="form-group">
              <label class="control-label">Engine Type</label>
              <input class="form-control white_bg" id="engien" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Engine Description</label>
              <input class="form-control white_bg" id="engien-description" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">No. of Cylinders</label>
              <input class="form-control white_bg" id="cylinders" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Mileage-City</label>
              <input class="form-control white_bg" id="mileage" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Mileage-Highway</label>
              <input class="form-control white_bg" id="mileage-h" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Fuel Tank Capacity</label>
              <input class="form-control white_bg" id="capacity" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Seating Capacity</label>
              <input class="form-control white_bg" id="s-capacity" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Transmission Type</label>
              <input class="form-control white_bg" id="Transmission" type="text">
            </div>
            <div class="gray-bg field-title">
              <h6>Accessories</h6>
            </div>
            <div class="vehicle_accessories">
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="air_conditioner" type="checkbox">
                <label for="air_conditioner">Air Conditioner</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="door" type="checkbox">
                <label for="door">Power Door Locks</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="antiLock" type="checkbox">
                <label for="antiLock">AntiLock Braking System</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="brake" type="checkbox">
                <label for="brake">Brake Assist</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="steering" type="checkbox">
                <label for="steering">Power Steering</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="airbag" type="checkbox">
                <label for="airbag">Driver Airbag</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="windows" type="checkbox">
                <label for="windows">Power Windows</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="passenger_airbag" type="checkbox">
                <label for="passenger_airbag">Passenger Airbag</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="player" type="checkbox">
                <label for="player">CD Player</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="sensor" type="checkbox">
                <label for="sensor">Crash Sensor</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="seats" type="checkbox">
                <label for="seats">Leather Seats</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="engine_warning" type="checkbox">
                <label for="engine_warning">Engine Check Warning</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="locking" type="checkbox">
                <label for="locking">Central Locking</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="headlamps" type="checkbox">
                <label for="headlamps">Automatic Headlamps</label>
              </div>
            </div>
            <div class="vehicle_type">
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="vehicle_type" value="radio" id="newcar">
                <label for="newcar">New Car</label>
              </div>
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="vehicle_type" value="radio" id="usedcar">
                <label for="usedcar">Used Car</label>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn">Submit Vehicle <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Post-vehicle--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="assets/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/100x60.png" class="img-responsive" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 

<?php include_once('partials/footer.php');?>