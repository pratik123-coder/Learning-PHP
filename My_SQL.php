<?php
echo  "Welcome to MYSQL";
$servername="localhost";
$username="root";
$passowrd="";
//Connection
$conn=mysqli_connect($servername,$username,$passowrd);
//Die if connection not successful
if (!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
echo "<br>";
echo "Connection was Successful";
?>