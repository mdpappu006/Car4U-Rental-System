<?php
  ob_start();
  include_once('partials/header.php');
  $postID = $_GET['id'] ?? 0;
  
  if(!$postID){
    header('location:index.php');
  }

  $sql = "SELECT * from tblvehicles where id='$postID' LIMIT 1";
  $results = mysqli_query($db, $sql);
  

?>

<?php 
  foreach($results as $row):
?>

<!--Listing-Image-Slider-->
<section id="listing_img_slider">
  <div><img src="admin/img/vehicleimages/<?php echo $row['Vimage1'];?>" class="img-responsive" alt="image"></div>
  <div><img src="admin/img/vehicleimages/<?php echo $row['Vimage2'];?>" class="img-responsive" alt="image"></div>
  <div><img src="admin/img/vehicleimages/<?php echo $row['Vimage3'];?>" class="img-responsive" alt="image"></div>
  <div><img src="admin/img/vehicleimages/<?php echo $row['Vimage4'];?>" class="img-responsive" alt="image"></div>
  <div><img src="admin/img/vehicleimages/<?php echo $row['Vimage5'];?>" class="img-responsive" alt="image"></div>
</section>
<!--/Listing-Image-Slider-->

<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2><?php echo $row['VehiclesTitle'];?></h2>
        <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> 12250 F Garvey Ave South West Covina, CA 91791</span></div>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>BDT <?php echo $row['PricePerDay'];?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
            
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5><?php echo $row['ModelYear'];?></h5>
              <p>Reg.Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5><?php echo $row['FuelType'];?></h5>
              <p>Fuel Type</p>
            </li>
            
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5><?php echo $row['SeatingCapacity'];?></h5>
              <p>Seats</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                <p><?php echo $row['VehiclesOverview']?></p>
              </div>
 
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories"> 
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Accessories</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Air Conditioner</td>

                      <?php if($row['AirConditioner']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                    <tr>
                      <td>Power Door Locks</td>
                      <?php if($row['PowerDoorLocks']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>

                    <tr>
                      <td>AntiLockBrakingSystem</td>

                      <?php if($row['AntiLockBrakingSystem']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>

                    <tr>
                      <td>Brake Assist</td>
                      <?php if($row['BrakeAssist']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                    <tr>
                      <td>Power Steering</td>

                      <?php if($row['PowerSteering']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                    <tr>
                      <td>Driver Air bag</td>
                      <?php if($row['DriverAirbag']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                    <tr>
                      <td>Passenger Air bag</td>
                      <?php if($row['PassengerAirbag']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                    <tr>
                      <td>Power Windows</td>
                      <?php if($row['PowerWindows']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                    <tr>
                      <td>CD Player</td>
                      <?php if($row['CDPlayer']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                    <tr>
                      <td>Central Locking</td>
                      <?php if($row['CentralLocking']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                    <tr>
                      <td>Crash Sensor</td>
                      <?php if($row['CrashSensor']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                    <tr>
                      <td>Leather Seats</td>
                      <?php if($row['LeatherSeats']):?>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      <?php else:?>

                        <td><i class="fa fa-close" aria-hidden="true"></i></td>

                      <?php endif;?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
        </div>
   
      </div>
      
      <?php endforeach;?>

      <!--Side-Bar-->
      <aside class="col-md-3">
        
        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i> Book Now </h5>
          </div>
          <div class="financing_calculatoe">
            <form method="post">
              <div class="form-group">
                <label>From Date:</label>
                <input type="date" class="form-control" name="fromdate" placeholder="From Date" required="">
              </div>
              <div class="form-group">
                <label>To Date:</label>
                <input type="date" class="form-control" name="todate" placeholder="To Date" required="">
              </div>
              <div class="form-group">
                <textarea rows="4" class="form-control" name="message" placeholder="Message" required=""></textarea>
              </div>
              <a href="login.php" class="btn btn-xs uppercase">Login For Book</a>

            </form>
          </div>
        </div>
       
        
      </aside>
      <!--/Side-Bar--> 
    </div>
    
    <div class="space-20"></div>
    <div class="divider"></div>
    
    <!--Similar-Cars-->
    <div class="similar_cars">
      <h3>Similar Cars</h3>
      <div class="row">
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
              <div class="label_icon">New</div>
              <div class="compare_item">
                <div class="checkbox">
                  <input type="checkbox" value="" id="compare13">
                  <label for="compare13">Compare</label>
                </div>
              </div>
            </div>
            <div class="product-listing-content">
              <h5><a href="#">Car Name</a></h5>
              <p class="list-price">$89,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
              <div class="label_icon">New</div>
              <div class="compare_item">
                <div class="checkbox">
                  <input type="checkbox" value="" id="compare20">
                  <label for="compare20">Compare</label>
                </div>
              </div>
            </div>
            <div class="product-listing-content">
              <h5><a href="#">Car Name </a></h5>
              <p class="list-price">$89,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
              <div class="label_icon">Used</div>
              <div class="compare_item">
                <div class="checkbox">
                  <input type="checkbox" value="" id="compare15">
                  <label for="compare15">Compare</label>
                </div>
              </div>
            </div>
            <div class="product-listing-content">
              <h5><a href="#">Car Name</a></h5>
              <p class="list-price">$89,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
              <div class="label_icon">Used</div>
              <div class="compare_item">
                <div class="checkbox">
                  <input type="checkbox" value="" id="compare16">
                  <label for="compare16">Compare</label>
                </div>
              </div>
            </div>
            <div class="product-listing-content">
              <h5><a href="#">Car Name</a></h5>
              <p class="list-price">$89,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/Similar-Cars--> 
    
  </div>
</section>
<!--/Listing-detail--> 

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
