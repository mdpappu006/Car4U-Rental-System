<?php
	include_once('backend/db.php');
	$id = $_SESSION['userid'] ?? 0;
	if(!$id){
		header("location: index.php");
		die();
	}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="theme-color" content="#3e454c" />

        <title>Car Rental Portal | Admin Edit Vehicle Info</title>

        <!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Sandstone Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Bootstrap Datatables -->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
        <!-- Bootstrap social button library -->
        <link rel="stylesheet" href="css/bootstrap-social.css" />
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="css/bootstrap-select.css" />
        <!-- Bootstrap file input -->
        <link rel="stylesheet" href="css/fileinput.min.css" />
        <!-- Awesome Bootstrap checkbox -->
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css" />
        <!-- Admin Stye -->
        <link rel="stylesheet" href="css/style.css" />
        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #dd3d36;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
            }
            .succWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #5cb85c;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>

    <body>
        <?php include('includes/header.php');?>
        <div class="ts-main-content">
            <?php include('includes/leftbar.php');?>
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title">Edit Vehicle</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Basic Info</div>
                                        <div class="panel-body">

<?php
	$editID= $_GET['id'];
	$sql = "SELECT * FROM tblvehicles where id='{$editID}'";
	$results = mysqli_query($db, $sql);

	foreach($results as $row):
?>										
                                            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Vehicle Title<span style="color: red;">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="vehicletitle" class="form-control" value="<?php echo $row['VehiclesTitle'];?>" required />
                                                    </div>
                                                    <label class="col-sm-2 control-label">Select Brand<span style="color: red;">*</span></label>
                                                    <div class="col-sm-4">
                                                        <select class="selectpicker" name="brandname" required>
                                                            <option value=""> </option>

                                                            <option value=""> </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="hr-dashed"></div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Vehical Overview<span style="color: red;">*</span></label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="vehicalorcview" rows="5" required> <?php echo $row['VehiclesOverview'];?> </textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Price Per Day(in USD)<span style="color: red;">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="priceperday" class="form-control" value="<?php echo $row['PricePerDay'];?>" required />
                                                    </div>
                                                    <label class="col-sm-2 control-label">Select Fuel Type<span style="color: red;">*</span></label>
                                                    <div class="col-sm-4">
                                                        <select class="selectpicker" name="fueltype" required>
                                                            <option value=""><?php echo $row['FuelType'];?> </option>

                                                            <option value="Petrol">Petrol</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="CNG">CNG</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Model Year<span style="color: red;">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="modelyear" class="form-control" value="<?php echo $row['ModelYear'];?>" required />
                                                    </div>
                                                    <label class="col-sm-2 control-label">Seating Capacity<span style="color: red;">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="seatingcapacity" class="form-control" value="<?php echo $row['SeatingCapacity'];?>" required />
                                                    </div>
                                                </div>
                                                <div class="hr-dashed"></div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <h4><b>Vehicle Images</b></h4>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-4">
                                                        Image 1 <img src="img/vehicleimages/<?php echo $row['Vimage1']?>" width="300" height="200" style="border: solid 1px #000;" />
                                                        <a href="changeimage1.php?imgid=">Change Image 1</a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        Image 2<img src="img/vehicleimages/<?php echo $row['Vimage2']?>" width="300" height="200" style="border: solid 1px #000;" />
                                                        <a href="changeimage2.php?imgid=">Change Image 2</a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        Image 3<img src="img/vehicleimages/<?php echo $row['Vimage3']?>" width="300" height="200" style="border: solid 1px #000;" />
                                                        <a href="changeimage3.php?imgid=">Change Image 3</a>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-4">
                                                        Image 4<img src="img/vehicleimages/<?php echo $row['Vimage4']?>" width="300" height="200" style="border: solid 1px #000;" />
                                                        <a href="changeimage4.php?imgid=">Change Image 4</a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        Image 5

                                                        <img src="img/vehicleimages/<?php echo $row['Vimage5']?>" width="300" height="200" style="border: solid 1px #000;" />
                                                        <a href="changeimage5.php?imgid=">Change Image 5</a>
                                                    </div>
                                                </div>
                                                <div class="hr-dashed"></div>

                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <button class="btn btn-primary" name="submit" type="submit" style="margin-top: 4%;">Update</button>
                                                    </div>
                                                </div>
                                            </form>
<?php 
	endforeach;
?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Loading Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/chartData.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
