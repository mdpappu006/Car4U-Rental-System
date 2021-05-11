<?php
    if(isset($_POST['user-signup'])){
        $fname=trim($_POST['fullname']);
        $mobile=trim($_POST['mobileno']);
        $email=trim($_POST['emailid']);
        $password= $_POST['password']; 
        $sql="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password) VALUES('$fname','$email','$mobile','$password')";
        $result= mysqli_query($db, $sql);
        
        if($result){	
			$_SESSION['success'] = true;
            header('location: ./registration.php');
            exit;
		}else{
            $_SESSION['error'] = true;
            header('location: ./registration.php');
            exit;
        }
    }
?>