<?php
  ob_start();
  include_once('partials/header.php');
  include_once('partials/registration.php');
?>

<!--Register-Form -->
<div class="container">
    <div class="row">
        <div class="registration-area m-5" id="signupform">
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
                                        <input type="email" class="form-control" placeholder="Email Address" name="emailid" required/>
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
                    <p class="text-left">Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/Register-Form -->

<?php include_once('partials/footer.php');?>
