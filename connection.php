<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "carwash";

$connection = mysqli_connect($hostname, $username, $password, $databasename);

if($connection){
    echo "Connected to database";
}else{
    echo "Failed connected to database";
}

?>