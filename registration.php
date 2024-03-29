<?php
  ob_start();
  include_once('partials/header.php');
  include_once('partials/registration.php');
?>

<!--Register-Form -->
<div class="container">
    <div class="row">

    <!-- Error Messages -->
    <?php if(isset($_SESSION['error'])):?>
        <div class="mt-5 alert alert-danger text-uppercase text-center font-weight-bold" role="alert">
            Registration Failed!
        </div>
    <?php unset($_SESSION["error"]);endif;?> 
    <!-- Error Messages -->

    <!-- Error Messages -->
    <?php if(isset($_SESSION['Passerror'])):?>
        <div class="mt-5 alert alert-danger text-uppercase text-center font-weight-bold" role="alert">
           Confirm password doesn't match!
        </div>
    <?php unset($_SESSION["Passerror"]);endif;?> 
    <!-- Error Messages -->

    <!-- success Message -->    
    <?php if(isset($_SESSION['success'])):?>
        <div class="mt-5 alert alert-success text-uppercase text-center font-weight-bold" role="alert">
            Registration Successful.
        </div>
    <?php unset($_SESSION["success"]);
        
    endif;?> 
	<!-- success Message -->



        <div class="registration-area " id="signupform">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Sign Up</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="signup_wrap">
                            <div class="col-md-12 col-sm-12">
                                <form method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name" name="fullname" required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Mobile Number" name="mobileno" required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address" name="emailid" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm-pass" required/>
                                    </div>
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="terms_agree" required/>
                                        <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                                    </div>
                                    <div class="form-group w-25">
                                        <input type="submit" value="Sign Up" class="btn btn-block" name="user-signup" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-left">Already got an account? <a href="login.php">Login Here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/Register-Form -->

<?php include_once('partials/footer.php');?>
