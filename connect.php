<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bedcheckerfinal";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if($conn)
{ 
    //echo"connection ok";

}
else{
   die("connection failed".mysqli_connect_error());    
}
?>