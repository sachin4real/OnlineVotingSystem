<?php

$vote = $_POST['vote'];
//echo $name;

$conn = mysqli_connect("localhost","root","","userregistration") or die("Connection Failed");

if($conn){
    echo "Connection succesfully";
}
$sql = "INSERT INTO vx(name,type) VALUES ('$vote','D')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");


mysqli_close($conn);
header("Location:dancingSlider.php");


?>