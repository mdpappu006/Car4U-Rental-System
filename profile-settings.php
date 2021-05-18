<?php
  ob_start();
  include_once('partials/header.php');
  $id = $_SESSION['userid'] ?? 0;
  if(!$id){
      header("location: index.php");
      die();
  }

  // Profile Updates query
  
  if(isset($_POST['saveChanges'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['phoneNum'];
    $dob= $_POST['dob'];
    $address= $_POST['uraddress'];
    $city= $_POST['city'];
    $country= $_POST['country'];
    $userQuery = "UPDATE tblusers set FullName='$fullname', EmailId='$email', ContactNo='$contact', dob='$dob', Address='$address', City='$city', Country='$country' where id='{$_SESSION['userid']}'";
    $userResult = mysqli_query($db, $userQuery);
    header('location: profile-settings.php');
  }
  //End Profile Updates query

?>

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Your Profile</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Profile</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Profile-setting-->
<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> <img src="assets/images/222x172.jpg" alt="image">
        <div class="upload_newlogo">
          <input name="upload" type="file">
        </div>
      </div>
      <div class="dealer_info">
        <h5><?php echo $_SESSION['userName'];?> </h5>
      </div>
    </div>
    <div class="row">
      <!-- Profile nav -->
      <?php
        include_once('profile-nav.php');

        // user Profile all info Query->
        $query = "SELECT * from tblusers where id='{$_SESSION['userid']}'";
        $result = mysqli_query($db, $query);


      ?>
      <!-- Profile nav -->
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Genral Settings</h5>
          <form method="POST">
          
          <?php 
              // Find User details
              foreach($result as $row):
          ?>
            <div class="form-group">
              <label class="control-label">Full Name</label>
              <input class="form-control white_bg" id="fullname" name="fullname" type="text" value="<?php echo $row['FullName'];?>">
            </div>
            <div class="form-group">
              <label class="control-label">Email Address</label>
              <input class="form-control white_bg" id="email" name="email" type="email" value="<?php echo $row['EmailId'];?>">
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number</label>
              <input class="form-control white_bg" id="phone-number" name="phoneNum" type="text" value="<?php echo $row['ContactNo'];?>">
            </div>
            <div class="form-group">
              <label class="control-label">Date of Birth</label>
              <input class="form-control white_bg" id="birth-date" name="dob" type="text" placeholder="dd/mm/yyyy" value="<?php echo $row['dob'];?>">
            </div>
            <div class="form-group">
              <label class="control-label">Your Address</label>
              <textarea class="form-control white_bg" name="uraddress" rows="4" value="Hi"><?php echo $row['Address'];?></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">Country</label>
              <input class="form-control white_bg" id="country" name="country" type="text" value="<?php echo $row['Country'];?>">
            </div>
            <div class="form-group">
              <label class="control-label">City</label>
              <input class="form-control white_bg" id="city" name="city" type="text" value="<?php echo $row['City'];?>">
            </div>

            <?php 
              endforeach;
              // Loop End
            ?>

            <div class="form-group">
              <button type="submit" class="btn" name="saveChanges">Save Changes <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 

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