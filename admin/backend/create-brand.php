<?php
    // Add brand
    if(isset($_POST['submit'])){
        $brand=trim($_POST['brand']);
        $sql="INSERT INTO  tblbrands(BrandName) VALUES('$brand')";
        $result = mysqli_query($db, $sql);
        
        if($result){	
            $_SESSION['success'] = true;
            header('location: ./create-brand.php');
            exit;
        }else{
            $_SESSION['error'] = true;
            header('location: ./create-brand.php');
            exit;
        }
    }
?>