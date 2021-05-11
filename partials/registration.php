<?php
    if(isset($_POST['user-signup'])){
        $fname=trim($_POST['fullname']);
        $mobile=trim($_POST['mobileno']);
        $email=trim($_POST['emailid']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 
        $conf_pass = $_POST['confirm-pass'];
        $pass_verified = password_verify( $conf_pass, $password);

        if($pass_verified){
            $sql="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password) VALUES('$fname','$email','$mobile','$conf_pass')";
            $result = mysqli_query($db, $sql);
            
            if($result){	
                $_SESSION['success'] = true;
                header('location: ./registration.php');
                exit;
            }else{
                $_SESSION['error'] = true;
                header('location: ./registration.php');
                exit;
            }
        }else{
            $_SESSION['Passerror'] = true;
        }

    }
?>