<?php
	define("DBHOST", "localhost:3306");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBNAME", "carfyou");
	$connect = mysqli_connect(DBHOST, DBUSER, DBPASS,DBNAME);
	if(!$connect){
		mysqli_error($connect);
	}
?>