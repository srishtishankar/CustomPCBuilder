<!DOCTYPE html>
<html>
<head>
	<title>Address</title>
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
		height: 400px;
		width: 500px;
		background-color: white;
		padding-top: 1%;
		margin-left: 32%;
		margin-top: 10%;
		box-shadow: grey 5px 10px;
	}
	a{
  		text-decoration: none;
  		color: #2196F3;
	}
	a:hover{
		color: grey;
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
		<h1>Enter your Address</h1>
		<p>(Don't forget to include your pin code and Landmark)</p>
		<p>Total Amount to be paid <?php session_start(); echo $_SESSION['total']; ?></p>
		<p>Payment method selected
			<?php 
			if (isset($_POST['submit'])){
				if(isset($_POST["payment"]))
					echo $_POST["payment"];
			}
			$_SESSION['payment'] = $_POST["payment"];
		 	?></p><br>
		<form action="confirm.php" method="POST">
			<textarea rows="5" cols="50" name="address" value="address" required></textarea>
			<br><br>
			<a href="confirm.php"><input type="submit" name="submit" value="Next" id="next"></a>
		</form>
		<p><b><a href="payment.php">Go Back</a></b></p>
	</div>
</body>
</html>