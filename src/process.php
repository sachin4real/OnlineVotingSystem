<?php 
ob_start(); 
require 'configer.php';

    $cust_name = $_POST['cust_name'];
    $cust_email = $_POST['cust_email'];
	$category = $_POST['category'];
	$ticketDate = $_POST['ticketDate'];
	$ticketTime = $_POST['ticketTime'];
	$noOfTickets = $_POST['noOfTickets'];
    $cardNumber = $_POST['card_number'];
    $cardCVC = $_POST['card_cvc'];
    $cardExpMonth = $_POST['card_exp_month'];
    $cardExpYear = $_POST['card_exp_year']; 


$query = mysqli_query($con, "INSERT INTO `transaction`(`id`, `cust_name`, `cust_email`, `category`, `ticketDate`, `ticketTime`,`noOfTickets`,`card_number`,`card_cvc`,`card_exp_month`,`card_exp_year`) VALUES ('','$cust_name','$cust_email','$category','$ticketDate','$ticketTime','$noOfTickets','$cardNumber','$cardCVC','$cardExpMonth','$cardExpYear')");


?>



