<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<style type="text/css">
	body{
  		background: url(blue3.jpg);
  		background-size: cover;
		background-position: center;
  		background-repeat: no-repeat;
  		text-align: center;
  		font-family: "montserrat";
		}
	#content{
		height: 300px;
		width: 500px;
		background-color: white;
		padding-top: 2%;
		margin-left: 32%;
		margin-top: 10%;
		box-shadow: grey 5px 10px;
	}
	a{
  		text-decoration: none;
  		color: #2196F3;
	}
	#next{
		background-color: #2196F3;
		color: white;
		height: 25px;
		width: 55px; 
	}
	</style>
</head>
<body>
	<div id="content">
		<h1>Choose a payment method</h1>
		<p>Total Amount to be paid <?php session_start(); echo $_SESSION['total']; ?></p><br>
		<form action="address.php" method="POST">
			<input type="radio" name="payment" value="Credit/Debit card">
			<label> Credit/Debit card</label><br><br>
			<input type="radio" name="payment" value="Cash on Delivery">
			<label> Cash on Delivery</label>
			<br><br>
			<a href="address.php"><input type="submit" name="submit" value="Next" id="next"></a>
		</form>
		<p><b><a href="buynow.php">Go Back</a></b></p>
	</div>
</body>
</html>