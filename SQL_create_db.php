<?php
 $servername="localhost";
 $username="root";
 $password="root";
 $database="pratik";

 $conn=mysqli_connect($servername,$username,$password,$database);
 if (!$conn){
     echo "Connection was Not Succesfull because of --> ". mysqli_error($conn);
 }
 else{
     echo"Connection was successful";
 }
 $sql="CREATE DATABASE contacts";
 $result=mysqli_query($conn,$sql);
 if ($result){
     echo "Database is created";
 }
 else {
     echo"Database creation unsuccesfull";
 }

?>