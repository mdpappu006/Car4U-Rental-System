<?php
	if(isset($_POST['login'])){
        $username = trim($_POST['username']);
        $userpass = $_POST['password'];
        if($username && $userpass){
            $query = "SELECT id,UserName,Password FROM admin WHERE UserName='{$username}'";

            $result= mysqli_query($db, $query);
            $dt = mysqli_num_rows($result);

            if(mysqli_num_rows($result) > 0){
                $data = mysqli_fetch_assoc($result);
                $_password = $data['Password'];

                if($data){
                    $verify = password_verify($userpass, $_password);
                    if(password_verify($userpass, $_password)){
                        $_SESSION['userid'] = $data['id'];
                        $_SESSION['userName'] = $data['FullName'];
                        header('location: ./dashboard.php');
                        die();
                    }else{
                        $_SESSION['passerror'] = true;
                        if($_SESSION['passerror']){
                            header("location: ./index.php");
                            exit;
                        }
                    }
                }
            }else{
                $_SESSION['error'] = true;
                if($_SESSION['error']){
                    header("location: ./index.php");
                    exit;
                }
            }
        }
    }
?>