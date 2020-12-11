<?php
	$_SESSION['user'] = false;
	if(isset($_POST['userLogin'])){
		// SANITIZATION
		$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
		$pass = filter_input(INPUT_POST, 'password' ,FILTER_SANITIZE_STRING);

		if($email && $pass){
			$query = "SELECT email, pass from signup_user where email='{$email}'";
			$result = mysqli_query($connect, $query);
			$user = mysqli_num_rows($result);
			
			if($user > 0){
				$data = mysqli_fetch_assoc($result);
				$_password = $data['pass'];
				if($data){
					$p = password_verify($pass, $_password);
					if($p == true){
						$_SESSION['user'] = true;
						// $_SESSION['username'] = $data['firstname'];
					}else{
						$passError = true;
					}
				}
			}

		}
	}