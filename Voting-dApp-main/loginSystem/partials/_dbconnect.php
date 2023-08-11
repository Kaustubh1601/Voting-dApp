<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "voters16";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
     //echo "successful";
//}
//else{
    die("Error: ". mysqli_connect_error());
}

?>
