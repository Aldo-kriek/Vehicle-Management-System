<?php
    include 'connect.php';
?>

<script> document.getElementById("delete").disabled = true; </script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
  
    <link rel="stylesheet" href='style.css'>
    
    <link rel="stylesheet" href='style3.css'>
    <link rel="stylesheet" href="style4.css">
    
    
</head>
<h1 class="heading"> <center><b><u> INFORMATION REPORT</u></b></center></h1><br><br>


<body id="backG">

    <div class="container">
    <a href="create.php"><button type="submit" class="btn btn-primary" name="create"> CREATE NEW</button></a>
     
        
    </button>

    <a href="index.php"><button type="submit" class="btn btn-primary" name="logout"> LOGOUT</button></a>




    </button><br><br><br><br>

    <div class='cont2'>

    <table class="table">
    
  <thead>
  
    <tr>
      <th scope="col">id</th>
      <th scope="col">Registration</th>
      <th scope="col">Make</th>
      <th scope="col">Model</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Fuel Type</th>
      <th scope="col">Tank Capacity</th>
      <th scope="col">Vehicle Status</th>
      <th scope="col">Branch</th>
      <th scope="col">Department</th>
      <th scope="col">Previous Owner</th>
      <th scope="col">Current Owner</th>
      <th scope="col">Operation</th>
      
     
    </tr>
  </thead>
  <tbody>

        <?php
            $sql="SELECT * FROM vehicle ";
            $result= mysqli_query($con,$sql);
            if($result)
            {
               while ($row=mysqli_fetch_assoc($result))
               {
                $id= $row['id'];
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
               
               
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$registration.'</td>
                <td>'.$make.'</td>
                <td>'.$model.'</td>
                <td>'.$vehicle_type.'</td>
                <td>'.$fuel_type.'</td>
                <td>'.$tank_capacity.'</td>
                <td>'.$vehicle_status.'</td>
                <td>'.$branch.'</td>
                <td>'.$department.'</td>
                <td>'.$previous_owner.'</td>
                <td>'.$driver.'</td> 
                
                <td>
                </div>
                <a href="home.php"><button type="submit" class="btn btn-primary" a href="update.php"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button ></a>
                <a href="home.php"><button type="submit" class="btn btn-danger" a href="home.php"><a href="delete.php?deleteid='.$id.'" class= "text-light" a href:>Delete</a></button> </a>

               
           
                  

                </td>
                </tr>';
               }
            }
        ?>
        </div>

        
</body>
</html>