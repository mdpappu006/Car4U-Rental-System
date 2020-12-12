<?php
	session_start();
	$id = $_SESSION['user'] ?? 0;
	if($id){
		session_destroy();
		header("location: ../index.php");
	}
?>