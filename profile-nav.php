<?php
  ob_start();
  include_once('partials/header.php');
  $id = $_SESSION['userid'] ?? 0;
  if(!$id){
      header("location: index.php");
      die();
  }
?>

<div class="col-md-3 col-sm-3">
    <div class="profile_nav">
      <ul>
        <li><a href="profile-settings.php">Profile Settings</a></li>
        <li><a href="update-password.php">Update password</a></li>
        <li><a href="my-booking.php">My Booking</a></li>
        <li><a href="post-testimonial.php">Post a Testimonial</a></li>
        <li><a href="my-testimonial.php">My Testimonials</a></li>
        <li><a href="logout.php">Sign Out</a></li>
      </ul>
    </div>
</div>