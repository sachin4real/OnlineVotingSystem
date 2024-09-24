<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment Gateway</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<style>
body{
	background-image: url("images/bg2.jpg");
	background-color: #cccccc;
	background-size: cover;
}
.panel-default{
	background-image: url("images/AdobeStock_291217289-copy.jpg");
	background-color: #000000;
	background-size: cover;
}
</style>

</head>

<body>
<?php 
session_start();
include('header.php');
?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-creditcardvalidator/1.0.0/jquery.creditCardValidator.js"></script>
<script type="text/javascript" src="js/payment.js"></script>
<div class="container">	
	<div class="row">	
		<center><h2>Payment Gateway</h2></center>	

		<?php 
		if(isset($_SESSION["message"]) && $_SESSION["message"] && $_SESSION["message"] == 'failed') {
		?>			
			<div class="alert alert-danger">
			  <?php 
			  echo "Error : Payment failed!"; 
			  $_SESSION["message"] = '';
			  ?>
			</div>
		<?php 
		} elseif(isset($_SESSION["message"]) && $_SESSION["message"]) {
		?>
			<div class="alert alert-success">
			  <?php 
			  echo $_SESSION["message"]; 
			  $_SESSION["message"] = '';
			  ?>
			</div>
		<?php } ?>
		<div class="panel panel-default">			
			<div class="panel-heading">SGT- Buy Tickets</div>
			<div class="panel-body">
				<form action="process.php" method="POST" id="paymentForm">	
					<div class="row">
						<div class="col-md-6">
							<h4 align="center" >Ticket Details</h4><br><br>
							<div class="form-group">
								<label><b>Select Date : <span class="text-danger">*</span></b></label>
								<input type="date" name="date" id="date" class="form-control" value="">
								<span id="errorDate" class="text-danger"></span><br>
							</div>
							<div class="form-group">
								<label><b>Select Time : <span class="text-danger">*</span></b></label>
								<input type="time" name="time" id="time" class="form-control" value="">
								<span id="errorTime" class="text-danger"></span><br>
							</div>
							<div class="form-group">
								<label><b>Select Category :  <span class="text-danger">*</span></b></label>
								<select name="category" id="category" style="width:250px;height:40px">
								<option value="Sing">Singing</option>
								<option value="Dance">Dancing</option>
								</select><br><br>
							</div>
							<div class="form-group">
								<label><b>Number of Tickets : <span class="text-danger">*</span></b></label>
								<input type="text" name="ticket" id="ticket" class="form-control" value="">
								<span id="errorTicket" class="text-danger"></span><br>
							</div>
						</div>

						<div class="col-md-6" style="border-right:1px solid #ddd;">
						<h4 align="center">Payment Details</h4><br>
							<center><img src="images/card_img.png" alt=""></center><br>
							<div class="form-group">
								<label><b>Card Holder Name <span class="text-danger">*</span></b></label>
								<input type="text" name="customerName" id="customerName" class="form-control" value="">
								<span id="errorCustomerName" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label><b>Email Address <span class="text-danger">*</span></b></label>
								<input type="text" name="emailAddress" id="emailAddress" class="form-control" value="">
								<span id="errorEmailAddress" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label>Card Number <span class="text-danger">*</span></label>
								<input type="text" name="cardNumber" id="cardNumber" class="form-control" placeholder="1234 5678 9012 3456" maxlength="20" onkeypress="">
								<span id="errorCardNumber" class="text-danger"></span>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label>Expiry Month</label>
										<input type="text" name="cardExpMonth" id="cardExpMonth" class="form-control" placeholder="MM" maxlength="2" onkeypress="return validateNumber(event);">
										<span id="errorCardExpMonth" class="text-danger"></span>
									</div>
									<div class="col-md-4">
										<label>Expiry Year</label>
										<input type="text" name="cardExpYear" id="cardExpYear" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return validateNumber(event);">
										<span id="errorCardExpYear" class="text-danger"></span>
									</div>
									<div class="col-md-4">
										<label>CVC</label>
										<input type="text" name="cardCVC" id="cardCVC" class="form-control" placeholder="123" maxlength="4" onkeypress="return validateNumber(event);">
										<span id="errorCardCvc" class="text-danger"></span>
									</div>
								</div>
							</div>
							<br><br>
							<center><input type="button" name="payNow" id="payNow" class="btn btn-success btn-sm" onclick="stripePay(event)" value="Pay Now" /></center>
							<br><br>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

