<?php 
  ob_start();
  include_once('partials/header.php');
  include_once('partials/login.php');
?>

<!--Login-Form -->
<div class="container">
  <div class="row">
    <div class="loginform">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Login</h3>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="login_wrap">
                <div class="col-md-12 col-sm-12">
                  <form method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username or Email address*" name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password*" name="password">
                    </div>
                    <div class="form-group checkbox">
                      <input type="checkbox" id="remember">
                      <label for="remember">Remember Me</label>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Login" class="btn btn-block" name="userLogin">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer text-center">
            <p>Don't have an account? <a href="registration.php">Signup Here</a></p>
            <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--/Login-Form --> 

<?php include_once('partials/footer.php');?>