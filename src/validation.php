<?php

    session_start();
    

    // connection change it 
    $con = new mysqli('localhost','root','','userregistration');



    
    //something was posted
    $user_name = $_POST['user_name'];
    $psw = $_POST['psw'];

    $s = "select * from usertable where user_name = '$user_name' && psw = '$psw'"; 
    
    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        header('location:homes.php');
    }else{
        header('location:login.php');
    }

       
?>