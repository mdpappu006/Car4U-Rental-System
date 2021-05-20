<?php
   if(isset($_POST['submit'])){
    $password=$_POST['password'];
    $newpass=$_POST['newpassword'];
    $confirmpass =$_POST['confirmpassword'];

    $sql ="SELECT * FROM admin where id=1";
    $query= mysqli_query($db, $sql);

    if(mysqli_num_rows($query) > 0){

        $data = mysqli_fetch_assoc($query);
        $_password = $data['Password'];
        $user_verify = password_verify($password, $_password);

        if($user_verify){
            $passhash = password_hash($newpass, PASSWORD_BCRYPT);
            $user_verified = password_verify($confirmpass, $passhash);

            if($user_verified){

                $con="update admin set Password='$passhash' where id=1";
                $query= mysqli_query($db, $con);
                $_SESSION['successmsg'] = true;
                if($_SESSION['successmsg']){	
                    header('location: ./change-password.php');
                    exit;
                }
            }else{
                $_SESSION['newpass'] = true;
                if($_SESSION['newpass']){
                    header("location: ./change-password.php");
                    exit;
                }
            }
        }else{
            $_SESSION['error'] = true;
            if($_SESSION['error']){
                header("location: ./change-password.php");
                exit;
            }
        }
    }
}


?>