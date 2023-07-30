<?php
echo  "Welcome to MYSQL";
echo "<br>";
$servername="localhost";
$username="root";
$passowrd="";

//Connection
$conn=mysqli_connect($servername,$username,$passowrd);

//Die if connection not successful
if (!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
else{
    echo "Connection was Successful";
}
echo "<br>";

//Create a db
$sql="CREATE DATABASE dbPratik6";
$result=mysqli_query($conn,$sql);
if (var_dump($result) == boolval(false)) {
    echo "The result is True";
    echo "<br>";
}
else{
    echo "the result was false";
    echo "<br>";
}


?>