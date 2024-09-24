<?php

    session_start();
    


    // connection change it 
    $con = mysqli_connect('localhost','root','','userregistration');

   

    
    //something was posted
    $user_name = $_POST['user_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $psw= $_POST['psw'];

    

    $s = "select * from usertable where user_name = '$user_name'"; 

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        header('location:Registration.php');
    }
    else
    {
        
        $sql = "INSERT INTO usertable(user_name,gender,email,mobile_number,psw)VALUES('$user_name','$gender','$email','$mobile_number','$psw');";
        mysqli_query($con, $sql);
        header('location:login.php');
    }

    $con->close();
?>