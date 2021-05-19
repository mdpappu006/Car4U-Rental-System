<?php
    // DB credentials.
    session_start();
    define('DB_HOST','localhost:3306');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','carfyou');
    // Establish database connection.

    $db = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(!$db){
        mysqli_connect_error($db);
    }
?>