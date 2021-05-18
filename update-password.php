<?php
  ob_start();
  include_once('partials/header.php');
  $id = $_SESSION['userid'] ?? 0;
  if(!$id){
      header("location: index.php");
      die();
  }

  // Changes Password Query
  if(isset($_POST['saveChanges'])){
    $password=$_POST['currentPass'];
    $newpass=$_POST['newpassword'];
    $confirmpass =$_POST['confirmpassword'];

    $sql ="SELECT * FROM tblusers where id='{$_SESSION['userid']}'";
    $query= mysqli_query($db, $sql);

    if(mysqli_num_rows($query) > 0){

        $data = mysqli_fetch_assoc($query);


        $_password = $data['Password'];
        $user_verify = password_verify($password, $_password);


        if($user_verify){
            $passhash = password_hash($newpass, PASSWORD_BCRYPT);
            $user_verified = password_verify($confirmpass, $passhash);

            if($user_verified){
                $con="update tblusers set Password='$passhash' where id='{$_SESSION['userid']}'";
                $query= mysqli_query($db, $con);
                $_SESSION['success'] = true;
                if($_SESSION['success']){	
                    header('location: update-password.php');
                    exit;
                }
            }else{
                $_SESSION['newpass'] = true;
                if($_SESSION['newpass']){
                    header("location: update-password.php");
                    exit;
                }
            }
        }else{
            $_SESSION['error'] = true;
            if($_SESSION['error']){
                header("location: update-password.php");
                exit;
            }
        }
    }
}





  //End Changes Password Query


?>

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Update Password</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Update Password</li>
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
        <h5>Autospot Used Cars Center </h5>
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
          <!-- success Message -->    
              <?php if(isset($_SESSION['success'])):?>
                  <div class="mt-5 alert alert-success text-uppercase text-center font-weight-bold" role="alert">
                    Your Password succesfully changed.
                  </div>
              <?php unset($_SESSION["success"]);
                  
              endif;?> 
            <!-- success Message -->

            <!-- error Message -->
            <?php if(isset($_SESSION['error'])):?>
								<div class="alert alert-danger text-uppercase text-center font-weight-bold" role="alert">
									Your current password is incorrect!
								</div>
						<?php unset($_SESSION["error"]); 	endif;?>
            <!-- error Message -->


          <form method="POST">
            <div class="gray-bg field-title">
              <h6>Update password</h6>
            </div>

            <div class="form-group">
              <label class="control-label">Current Password</label>
              <input class="form-control white_bg" id="password" name="currentPass" type="password" required>
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input class="form-control white_bg" id="password" name="newpassword" type="password" required>
            </div>
            <div class="form-group">
              <label class="control-label">Confirm Password</label>
              <input class="form-control white_bg" id="c-password" name="confirmpassword" type="password" required>
            </div>
           
            <div class="form-group">
              <button type="submit" class="btn" name="saveChanges">Update <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
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