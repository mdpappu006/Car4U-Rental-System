<?php
	if(isset($_POST['userLogin'])){
        $username = trim($_POST['email']);
        $userpass = $_POST['password'];
        if($username && $userpass){
            $query = "SELECT id,FullName,EmailId,Password FROM tblusers WHERE EmailId ='{$username}'";

            $result= mysqli_query($db, $query);
            $dt = mysqli_num_rows($result);

            if(mysqli_num_rows($result) > 0){
                $data = mysqli_fetch_assoc($result);
                $_password = $data['Password'];

                if($data){
                    if(password_verify($userpass, $_password)){
                        $_SESSION['userid'] = $data['id'];
                        $_SESSION['userName'] = $data['FullName'];
                        header('location: ./index.php');
                        die();
                    }else{
                        $_SESSION['passerror'] = true;
                        if($_SESSION['passerror']){
                            header("location: ./login.php");
                            exit;
                        }
                    }
                }
            }else{
                $_SESSION['error'] = true;
                if($_SESSION['error']){
                    header("location: ./login.php");
                    exit;
                }
            }
        }
    }



?>