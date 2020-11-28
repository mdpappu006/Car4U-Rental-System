<?php
	if(isset($_POST['user-signup'])){
		
		// SANITIZATION
		$name = filter_input(INPUT_POST, 'full-name' ,FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
		$pass = filter_input(INPUT_POST, 'password' ,FILTER_SANITIZE_STRING);

		$confirmPass = filter_input(INPUT_POST, 'confirm-pass' ,FILTER_SANITIZE_STRING);
		$userpass = password_hash($pass, PASSWORD_DEFAULT);
		$validUser = password_verify($confirmPass, $userpass);

		if($validUser){
			$query = "INSERT INTO signup_user(fullname,email,pass) values('$name', '$email', '$userpass')";
			$result = mysqli_query($connect, $query);
			header("location: index.php");
		}

	}
?>