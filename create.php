


<?php
include 'connect.php';

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
  
   


    $sql = "INSERT into vehicle (registration, make, model, vehicle_type, fuel_type, tank_capacity, vehicle_status, branch, department, previous_owner, driver) 
    values                      ('$registration', '$make', '$model', '$vehicle_type', '$fuel_type', '$tank_capacity', '$vehicle_status', '$branch', '$department', '$previous_owner', '$driver')";

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="style2.css" >
    <link rel="stylesheet" href="style3.css" >
    



  </head>
  <body class="bod">
  <h1 my-5> <center><b><u>CREATE </u></b></center></h1>
    <div class = "container my-5" >

<form method="post">
    <div class="form-group" >
        <label> Registration Number :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle registration number" name="registration" style='text-transform:uppercase' autocomplete="off" required >
    </div>
    <div class="form-group">
        <label> Vehicle Make :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle make" name="make" autocomplete="on"required>
    </div>
    <div class="form-group">
        <label> Vehicle Model :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle model" name="model"  autocomplete="on"required>
    </div><br><br>
    <div class="form-group" >
        
        <label for="" >Vehicle Type :</label>
        <div class="drop_dwn" required><br>
            <select name="vehicle_type" class="form-control" style="background-color: black" size="1px" autocomplete="on" required >
            <option value="Please select an option" >SELECT AN OPTION</option>  
                <option value="convertible">CONVERTIBLE</option>
                <option value="coupe">COUPE</option>
                <option value="crossover">CROSS-OVER</option>
                <option value="hatchback">HATCHBACK</option>
                <option value="minivan"> MINIVAN</option>
                <option value="sedan"> SEDAN</option>
                <option value="sport"> SPORTS</option>
                <option value="truck"> TRUCK</option> 
            </select>
            </div><br><br>
            </div>
    <div class="form-group" >
        <label for="">Fuel Type : </label>
        <div class="drop_dwn"><br>
            <select name="fuel_type"  class="form-control" style="background-color: black" size="1px" autocomplete="on"required >
            <option value="Please select an option" >SELECT AN OPTION</option>  
                <option value="electric">ELECTRIC</option>
                <option value="petrol">PETROL</option>
                <option value="diesel">DIESEL</option>
            </select>
            </div><br><br>
</div>
    <div class="form-group" >
        <label for="">Tank Capacity :</label>
        <div class="drop_dwn"><br>
            <select  name="tank_capacity"  class="form-control" style="background-color: black" autocomplete="on"required>
            <option value="Please select an option" >SELECT AN OPTION</option>  
                <option value="40L">40L</option>
                <option value="45L">45L</option>
                <option value="50L">50L</option>
                <option value="55L">55L</option>
                <option value="60L">60L</option>
                <option value="65L">65L</option>
                <option value="70L">70L</option>
                <option value="75L">75L</option>
                <option value="80L">80L</option>
                <option value="90L">90L</option>
                <option value="100L">100L</option>  
            </select>
            </div><br><br>
            </div>
    <div class="form-group" >
        
        <label for="">Vehicle Status :</label>
        <div class="drop_dwn"><br>
            <select  name="vehicle_status"  class="form-control" style="background-color: black" autocomplete="on"required >
            <option value="Please select an option" >SELECT AN OPTION</option>    
           
                <option value="active">ACTIVE</option>
                <option value="service">REPAIR</option>
                <option value="written off">WRITTEN OFF</option> 
            </select>
            </div><br><br>
            </div><br>
    <div class="form-group">
        <label> Branch :</label>
        <input type="text" class="form-control" placeholder="Enter the Branch location" name="branch"  autocomplete="off"required>
    </div>

    <div class="form-group">
        <label> Department :</label>
        <input type="text" class="form-control" placeholder="Enter department name" name="department"  autocomplete="off"required>
    </div>

    <div class="form-group">
        <label> Previous Owner :</label>
        <input type="text" class="form-control" placeholder="Enter vehicle previous owner" name="previous_owner" autocomplete="off"required>
    </div>

    <div class="form-group">
        <label> Current Owner :</label>
        <input type="text" class="form-control" placeholder="Enter driver name" name="driver"  autocomplete="off"required>
    </div>

    </div>
    <div><br><br>
        <a href="home.php"><button type="submit" class="btn btn-primary" name="submit"> SAVE</button></a>
      
        
</form>

<a href="home.php"><button type="submit" class="btn btn-primary" name="back"> GO BACK</button></a>

    
<br>

    </div>

   
  </body>
</html>

