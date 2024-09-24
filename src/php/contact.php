<?php

 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 // connection change it 
 $conn = mysqli_connect('localhost','root','',"sgt");
 

 // connection check
 if (!$conn){
  die("Connection Failed");
 }
 else{
 echo " database Connect Successfully\n";
// SQL Query
 $sql= "INSERT INTO contact(name1,email,message1) VALUES('$name',' $email',' $message')";

// Insert Query 

if ($conn->query($sql) === TRUE  ){
  echo "Sucessfully created a new recode";
}
}
//close the current connection
$conn->close();








?>