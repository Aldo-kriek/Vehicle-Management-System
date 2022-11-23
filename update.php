<?php
include 'connect.php';

$id=$_GET['updateid'];

$sql= "SELECT * FROM vehicle WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

                $registration= $row['registration'];
                $make= $row['make'];
                $model= $row['model'];
                $vehicle_type= $row['vehicle_type'];
                $fuel_type= $row['fuel_type'];
                $tank_capacity= $row['tank_capacity'];
                $vehicle_status= $row['vehicle_status'];
                $branch= $row['branch'];
                $department= $row['department'];
                $previous_owner= $row['previous_owner'];
                $driver= $row['driver'];



if(isset($_POST['submit']))
{
    $registration= $_POST['registration'];
    $make= $_POST['make'];
    $model= $_POST['model'];
    $vehicle_type= $_POST['vehicle_type'];
    $fuel_type= $_POST['fuel_type'];
    $tank_capacity= $_POST['tank_capacity'];
    $vehicle_status= $_POST['vehicle_status'];
    $branch= $_POST['branch'];
    $department= $_POST['department'];
    $previous_owner= $_POST['previous_owner'];
    $driver= $_POST['driver'];

    $sql = "UPDATE vehicle SET id='$id', registration='$registration', make='$make', model='$model', vehicle_type='$vehicle_type', fuel_type='$fuel_type', tank_capacity='$tank_capacity', 
    vehicle_status='$vehicle_status', branch='$branch', department='$department', previous_owner='$previous_owner', driver='$driver' WHERE id=$id";
    
    $result = mysqli_query($con,$sql);

    if($result)
    {
       header('location:home.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta lang="EN">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update</title>

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href='style.css'>
    <link rel="stylesheet" href='style2.css'>
    <link rel="stylesheet" href='style3.css'>

  </head>
  <body>
  <h1> <center><b><u>UPDATE</u></b></center></h1><br><br>
    <div class = "container my-5" >
<div class='cont2'>
<form method="post">

    <div class="form-group" >
        <label> Registration Number :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle registration number" name="registration" style="text-transform:uppercase" autocomplete="off" required value=<?php echo $registration;?> >
    </div>

    <div class="form-group">
        <label> Vehicle Make :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle make" name="make" autocomplete="off"  required value=<?php echo $make;?>>
    </div>

    <div class="form-group">
        <label> Vehicle Model :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle model" name="model" autocomplete="off"  required value=<?php echo $model;?>>
    </div>

    <div class="form-group">
        <label> Vehicle Type :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle type" name="vehicle_type"  required value=<?php echo $vehicle_type;?>>
    </div>

    <div class="form-group">
        <label> Fuel Type :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle fuel type" name="fuel_type"  required autocomplete="off" value=<?php echo $fuel_type;?>>
    </div>

    <div class="form-group">
        <label> Tank Capacity :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle tank capacity" name="tank_capacity"  required autocomplete="off" value=<?php echo $tank_capacity;?>>
    </div>

    <div class="form-group">
        <label> Vehicle Status :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle status" name="vehicle_status"  required autocomplete="off" value=<?php echo $vehicle_status;?>>
    </div>
  

    <div class="form-group">
        <label> Branch :</label>
        <input type="text" class="form-control" placeholder="Enter the Branch name" name="branch" autocomplete="off"  required value=<?php echo $branch;?>>
    </div>

    <div class="form-group">
        <label> Department :</label>
        <input type="text" class="form-control" placeholder="Enter department name" name="department" autocomplete="off"  required value=<?php echo $department;?>>
    </div>

    <div class="form-group">
        <label> Previous Owner :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle previous owner" name="previous_owner" autocomplete="off"  required value=<?php echo $previous_owner;?>>
    </div>

    <div class="form-group">
        <label> Driver :</label>
        <input type="text" class="form-control" placeholder="Enter driver name" name="driver"  autocomplete="off" required value=<?php echo $driver;?>>
    </div>
    
    </div><br><br><div class="heading">
        <button type="submit" class="btn btn-primary" name="submit">SAVE</button>
        <a href="home.php"><button type="submit" class="btn btn-primary" name="back"><a href="home.php"> GO BACK</button></a></a>
</form>


    </div>

   
  </body>
</html>