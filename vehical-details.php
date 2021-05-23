<?php 
  include_once('partials/header.php');
?>

<!--Listing-Image-Slider-->
<section id="listing_img_slider">
  <div><img src="assets/images/900x560.jpg" class="img-responsive" alt="image"></div>
  <div><img src="assets/images/900x560_2.jpg" class="img-responsive" alt="image"></div>
  <div><img src="assets/images/900x560.jpg" class="img-responsive" alt="image"></div>
  <div><img src="assets/images/900x560_2.jpg" class="img-responsive" alt="image"></div>
  <div><img src="assets/images/900x560.jpg" class="img-responsive" alt="image"></div>
  <div><img src="assets/images/900x560_2.jpg" class="img-responsive" alt="image"></div>
</section>
<!--/Listing-Image-Slider-->

<!-- Filter-Form -->
<section id="filter_form" class="inner-filter gray-bg">
  <div class="container">
    <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>
    <div class="row">
      <form action="#" method="get">
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option value="">Select Location </option>
              <option value="">Location 1 </option>
              <option value="">Location 1 </option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Brand</option>
              <option>Brand 1</option>
              <option>Brand 2</option>
              <option>Brand 3</option>
              <option>Brand 4</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Model</option>
              <option>Series 1</option>
              <option>Series 2</option>
              <option>Series 3</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Year of Model </option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 black_input">
          <label class="form-label">Price Range ($)</label>
          <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Type of Car </option>
              <option>New Car</option>
              <option>Used Car</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6">
          <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car </button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- /Filter-Form --> 

<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2>Car Name</h2>
        <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> 12250 F Garvey Ave South West Covina, CA 91791</span></div>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>BDT 1000</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
            <li> <i class="fa fa-tachometer" aria-hidden="true"></i>
              <h5>13,000</h5>
              <p>Total Kilometres</p>
            </li>
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>2010</h5>
              <p>Reg.Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>Diesel</h5>
              <p>Fuel Type</p>
            </li>
            <li> <i class="fa fa-power-off" aria-hidden="true"></i>
              <h5>Automatic</h5>
              <p>Transmission</p>
            </li>
            <li> <i class="fa fa-superpowers" aria-hidden="true"></i>
              <h5>153KW</h5>
              <p>Engine</p>
            </li>
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>5</h5>
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
                <h4>What is Lorem Ipsum?</h4>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>AntiLock Braking System</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Power Steering</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Power Windows</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>CD Player</td>
                      <td><i class="fa fa-close" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Leather Seats</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Central Locking</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Power Door Locks</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Brake Assist</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Driver Airbag</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Passenger Airbag</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Crash Sensor</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Engine Check Warning</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Automatic Headlamps</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
        </div>
   
      </div>
      
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
          <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Book</a>

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
