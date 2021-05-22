<?php
    // Add brand
    if(isset($_POST['submit'])){
        $vehiclesTitle = trim($_POST['vehicletitle']);
        $vehiclesBrand = trim($_POST['brandname']);
        $vehiclesOverview = trim($_POST['vehicalorcview']);
        $pricePerDay = trim($_POST['priceperday']);
        $FuelType = trim($_POST['fueltype']);
        $ModelYear = trim($_POST['modelyear']);
        $SeatingCapacity = trim($_POST['seatingcapacity']);
        $Vimage1 = $_FILES['img1']['name'];
        $Vimage2 = $_FILES['img2']['name'];
        $Vimage3 = $_FILES['img3']['name'];
        $Vimage4 = $_FILES['img4']['name'];
        $Vimage5 = $_FILES['img5']['name'];
        $airconditioner=$_POST['airconditioner'] ?? 0;
        $powerdoorlocks= $_POST['powerdoorlocks'] ?? 0;
        $antilockbrakingsys= $_POST['antilockbrakingsys'] ?? 0;
        $brakeassist= $_POST['brakeassist'] ?? 0;
        $powersteering= $_POST['powersteering'] ?? 0;
        $driverairbag= $_POST['driverairbag'] ?? 0;
        $passengerairbag= $_POST['passengerairbag'] ?? 0;
        $powerwindow= $_POST['powerwindow'] ?? 0;
        $cdplayer= $_POST['cdplayer'] ?? 0;
        $centrallocking= $_POST['centrallocking']?? 0;
        $crashcensor= $_POST['crashcensor'] ?? 0;
        $leatherseats= $_POST['leatherseats'] ?? 0;
        move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);
        move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$_FILES["img2"]["name"]);
        move_uploaded_file($_FILES["img3"]["tmp_name"],"img/vehicleimages/".$_FILES["img3"]["name"]);
        move_uploaded_file($_FILES["img4"]["tmp_name"],"img/vehicleimages/".$_FILES["img4"]["name"]);
        move_uploaded_file($_FILES["img5"]["tmp_name"],"img/vehicleimages/".$_FILES["img5"]["name"]);    

        $sql="INSERT INTO tblvehicles(VehiclesTitle, VehiclesBrand, VehiclesOverview, PricePerDay,FuelType, ModelYear, SeatingCapacity, Vimage1, Vimage2, Vimage3, Vimage4, Vimage5, AirConditioner, PowerDoorLocks, AntiLockBrakingSystem, BrakeAssist, PowerSteering, DriverAirbag, PassengerAirbag, PowerWindows, CDPlayer, CentralLocking, CrashSensor, LeatherSeats) VALUES('$vehiclesTitle','$vehiclesBrand','$vehiclesOverview','$pricePerDay','$FuelType','$ModelYear','$SeatingCapacity','$Vimage1','$Vimage2','$Vimage3','$Vimage4','$Vimage5','$airconditioner','$powerdoorlocks','$antilockbrakingsys','$brakeassist','$powersteering','$driverairbag','$passengerairbag','$powerwindow','$cdplayer','$centrallocking','$crashcensor','$leatherseats')";
        $result = mysqli_query($db, $sql);
  
        if($result){	
            $_SESSION['success'] = true;
            header('location: ./post-avehical.php');
            exit;
        }else{
            $_SESSION['error'] = true;
            header('location: ./post-avehical.php');
            exit;
        }
    }
?>