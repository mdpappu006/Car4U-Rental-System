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
        <h1>My Vehicles</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>My Vehicles</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--my-vehicles-->
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
          <h5 class="uppercase underline">My Booking <span>(20 Cars)</span></h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">
              <li>
                <div class="vehicle_img"> <a href="#"><img src="assets/images/600x380.jpg" alt="image"></a> </div>
                <div class="vehicle_title">
                  <h6><a href="#">Your Car Listing Name</a></h6>
                </div>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Active</a>
                  <div class="clearfix"></div>
                  <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
              </li>
              <li class="deactive_vehicle">
                <div class="vehicle_img"> <a href="#"><img src="assets/images/600x380.jpg" alt="image"></a> </div>
                <div class="vehicle_title">
                  <h6><a href="#">Your Car Listing Name</a></h6>
                </div>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Deactive</a>
                  <div class="clearfix"></div>
                  <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
              </li>
              <li>
                <div class="vehicle_img"> <a href="#"><img src="assets/images/600x380.jpg" alt="image"></a> </div>
                <div class="vehicle_title">
                  <h6><a href="#">Your Car Listing Name</a></h6>
                </div>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Active</a>
                  <div class="clearfix"></div>
                  <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
              </li>
              <li>
                <div class="vehicle_img"> <a href="#"><img src="assets/images/600x380.jpg" alt="image"></a> </div>
                <div class="vehicle_title">
                  <h6><a href="#">Your Car Listing Name</a></h6>
                </div>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Active</a>
                  <div class="clearfix"></div>
                  <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
              </li>
              <li>
                <div class="vehicle_img"> <a href="#"><img src="assets/images/600x380.jpg" alt="image"></a> </div>
                <div class="vehicle_title">
                  <h6><a href="#">Your Car Listing Name</a></h6>
                </div>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Active</a>
                  <div class="clearfix"></div>
                  <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
              </li>
              <li>
                <div class="vehicle_img"> <a href="#"><img src="assets/images/600x380.jpg" alt="image"></a> </div>
                <div class="vehicle_title">
                  <h6><a href="#">Your Car Listing Name</a></h6>
                </div>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Active</a>
                  <div class="clearfix"></div>
                  <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
              </li>
            </ul>
            <div class="pagination">
              <ul>
                <li class="current">1</li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 

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

