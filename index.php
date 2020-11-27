<!-- Start header -->
<?php include_once('partials/header.php');?>
<!-- End header -->

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Find the right car for you.</h1>
            <p>We have more than a thousand cars for you to choose. </p>
            <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 

<!-- Filter-Form -->
<section id="filter_form" class="gray-bg">
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
              <option>Brand 3</option>
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

<!-- About -->
<section class="about-us-section section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Welcome <span>to CarForYou</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-6">
        <div class="looking-car">
          <div class="looking-cat-image"> <img src="assets/images/346x224.png" alt="Image" /> </div>
          <div class="looking-car-content">
            <h3>Looking <span>Used Car?</span></h3>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
            <a href="" class="btn">View Listing<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6">
        <div class="looking-car">
          <div class="looking-cat-image"> <img src="assets/images/346x224.png" alt="Image" /> </div>
          <div class="looking-car-content">
            <h3>Looking <span>New Car?</span></h3>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
            <a href="" class="btn">View Listing<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /About --> 

<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>Deals For You</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
          <li role="presentation"><a href="#resentusecar" role="tab" data-toggle="tab">Use Car</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare4">
                    <label for="compare4">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Car Name</a></h6>
                <span class="price">$45,000</span> 
              </div>
              <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare5">
                    <label for="compare5">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Car Name</a></h6>
                <span class="price">$20,000</span> 
              </div>
              <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare6">
                    <label for="compare6">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Car Name</a></h6>
                <span class="price">$60,000</span> 
              </div>
              <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare7">
                    <label for="compare7">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Car Name</a></h6>
                <span class="price">$90,000</span> 
              </div>
              <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare8">
                    <label for="compare8">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Car Name</a></h6>
                <span class="price">$49,000</span> 
              </div>
              <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare9">
                    <label for="compare9">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Car Name</a></h6>
                <span class="price">$20,000</span> 
              </div>
              <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
        </div>
        
        <!-- Recently Listed Used Cars -->
        <div role="tabpanel" class="tab-pane" id="resentusecar">
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare90">
                    <label for="compare9">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Used Car Name</a></h6>
                <span class="price">$90,000</span> 
              </div>
              <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare10">
                    <label for="compare10">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Used Car Name</a></h6>
                <span class="price">$49,000</span>
              </div>
              <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare11">
                    <label for="compare11">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Used Car Name</a></h6>
                <span class="price">$20,000</span> 
               </div>
               <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare12">
                    <label for="compare12">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Used Car Name</a></h6>
                <span class="price">$45,000</span> 
               </div>
               <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare13">
                    <label for="compare13">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Used Car Name</a></h6>
                <span class="price">$20,000</span> 
               </div>
               <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt=""></a>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" id="compare14">
                    <label for="compare14">Compare</label>
                  </div>
                </div>
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="#">Used Car Name</a></h6>
                <span class="price">$60,000</span> 
               </div>
               <div class="inventory_info_m">
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
            <p>New Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
            <p>Used Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 

<!--Featured Car-->
<section class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Featured  Cars <span>Special Offers</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    </div>
    <div class="row">
      <div class="col-list-3">
        <div class="featured-car-list">
          <div class="featured-car-img"> <a href=""><img src="assets/images/600x380.jpg" class="img-responsive" alt="Image"></a>
            <div class="label_icon">New</div>
            <div class="compare_item">
              <div class="checkbox">
                <input  type="checkbox" id="compare">
                <label for="compare">Compare</label>
              </div>
            </div>
          </div>
          <div class="featured-car-content">
            <h6><a href="#">Car Name</a></h6>
            <div class="price_info">
              <p class="featured-price">$90,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
            </div>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-list-3">
        <div class="featured-car-list">
          <div class="featured-car-img"> <a href=""><img src="assets/images/600x380.jpg" class="img-responsive" alt="Image"></a>
            <div class="label_icon">Used</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" id="compare2">
                <label for="compare2">Compare</label>
              </div>
            </div>
          </div>
          <div class="featured-car-content">
            <h6><a href="#">Car Name</a></h6>
            <div class="price_info">
              <p class="featured-price">$90,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
            </div>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-list-3">
        <div class="featured-car-list">
          <div class="featured-car-img"> <a href=""><img src="assets/images/600x380.jpg" class="img-responsive" alt="Image"></a>
            <div class="label_icon">Used</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" id="compare3">
                <label for="compare3">Compare</label>
              </div>
            </div>
          </div>
          <div class="featured-car-content">
            <h6><a href="#">Car Name</a></h6>
            <div class="price_info">
              <p class="featured-price">$90,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
            </div>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Featured Car--> 

<!--Trending Car-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Trending <span>Cars of the Year</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div id="trending_slider">
          <div class="trending-car-m">
            <div class="trending-car-img"> <img src="assets/images/600x380.jpg" alt="Image" class="img-responsive" /> </div>
            <div class="trending-hover">
              <h4><a href="#">Car Name</a></h4>
            </div>
          </div>
          <div class="trending-car-m">
            <div class="trending-car-img"> <img src="assets/images/600x380_2.jpg" alt="Image" class="img-responsive" /> </div>
            <div class="trending-hover">
              <h4><a href="#">Car Name</a></h4>
            </div>
          </div>
          <div class="trending-car-m">
            <div class="trending-car-img"> <img src="assets/images/600x380.jpg" alt="Image" class="img-responsive" /> </div>
            <div class="trending-hover">
              <h4><a href="#">Car Name</a></h4>
            </div>
          </div>
          <div class="trending-car-m">
            <div class="trending-car-img"> <img src="assets/images/600x380_2.jpg" alt="Image" class="img-responsive" /> </div>
            <div class="trending-hover">
              <h4><a href="#">Car Name</a></h4>
            </div>
          </div>
          <div class="trending-car-m">
            <div class="trending-car-img"> <img src="assets/images/600x380.jpg" alt="Image" class="img-responsive" /> </div>
            <div class="trending-hover">
              <h4><a href="#">Car Name</a></h4>
            </div>
          </div>
          <div class="trending-car-m">
            <div class="trending-car-img"> <img src="assets/images/600x380_2.jpg" alt="Image" class="img-responsive" /> </div>
            <div class="trending-hover">
              <h4><a href="#">Car Name</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Trending Car--> 

<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customers</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    </div>
    <div class="row">
      <div id="testimonial-slider">
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/300x300.jpg" alt="images" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Donald Brooks</h5>
              <span class="client-designation">CEO of xzy company</span> </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
          </div>
        </div>
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/300x300.jpg" alt="images" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Enzo Giovanotelli</h5>
              <span class="client-designation">CEO of xzy company</span> </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
          </div>
        </div>
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/300x300.jpg" alt="images" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Donald Brooks</h5>
              <span class="client-designation">CEO of xzy company</span> </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
          </div>
        </div>
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/300x300.jpg" alt="images" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Enzo Giovanotelli</h5>
              <span class="client-designation">CEO of xzy company</span> </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
          </div>
        </div>
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/300x300.jpg" alt="images" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Donald Brooks</h5>
              <span class="client-designation">CEO of xzy company</span> </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
          </div>
        </div>
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/300x300.jpg" alt="images" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Enzo Giovanotelli</h5>
              <span class="client-designation">CEO of xzy company</span> </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 

<!--Blog -->
<section class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Latest Updates In<span> Automobile Industry</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <article class="blog-list">
          <div class="blog-info-box"> 
          	<div class="share_article">
            	<p><i class="fa fa-share-alt" aria-hidden="true"></i></p>
                <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
            <ul>
              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>15 Nov 2016</li>
              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>10 Comments</a></li>
            </ul>
          </div>
          <div class="blog-content">
            <h5><a href="#">But I must explain to you how all this mistaken idea.</a></h5>
            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </article>
      </div>
      <div class="col-md-4 col-sm-4">
        <article class="blog-list">
          <div class="blog-info-box"> 
          <div class="share_article">
            	<p><i class="fa fa-share-alt" aria-hidden="true"></i></p>
                <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
            <ul>
              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>10 Nov 2016</li>
              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>21 Comments</a></li>
            </ul>
          </div>
          <div class="blog-content">
            <h5><a href="#">On the other hand, we denounce with righteous indignation.</a></h5>
            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </article>
      </div>
      <div class="col-md-4 col-sm-4">
        <article class="blog-list">
          <div class="blog-info-box"> 
          <div class="share_article">
            	<p><i class="fa fa-share-alt" aria-hidden="true"></i></p>
                <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <a href="#"><img src="assets/images/600x380.jpg" class="img-responsive" alt="image"></a>
            <ul>
              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>05 Nov 2016</li>
              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>18 Comments</a></li>
            </ul>
          </div>
          <div class="blog-content">
            <h5><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a></h5>
            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- /Blog--> 

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