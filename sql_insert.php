
<?php
$servername="localhost";
$username="root";
$password="root";
$database="pratik";

$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die("Sorry we failed to connect");
}
else {
    echo"Connection was succesfull";
}
$sql="INSERT INTO employees ('name','dest') VALUES ('ABhigyan ','Saheed Nagar')";
$result=mysqli_query($conn,$sql);
if ($result){
    echo "The Data was Inserted";
}
else{
    echo "The Data was not inserted because of ". mysqli_error($sql);
}
?>