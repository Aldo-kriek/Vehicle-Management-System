<?php

$con = new mysqli('localhost', 'root', '', 'car_database');

if(!$con)
{
    die(mysqli_error($con));
}


?>