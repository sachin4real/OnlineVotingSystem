<?php

    session_start();


    // connection change it 
    $conn = mysqli_connect('localhost','root','','usertable');

    mysqli_select_db($conn, 'usertable');

    
    //something was posted
    $user_name = $_POST['user_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $psw_confirm = $_POST['psw'];

    $s = "select * from usertable where name = '$user_name'"; 
    
    $result = mysqli_query($conn, $s);


    $reg="insert into usertable(user_name, gender, email, mobile_number,psw_confirm) values ('$user_name','$gender','$email','$mobile_number','$psw_confirm')";
    mysqli_query($conn, $reg);
    echo"Registration Successful";


?>
