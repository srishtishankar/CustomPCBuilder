<!DOCTYPE html>
<html>
<head>
	<title>Confirm Order</title>
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
		height: 350px;
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
	a:hover{
		color: grey;
	}
	button{
		background-color: #2196F3;
		color: white;
		height: 50px;
		width: 140px;
	}
	button:hover{
		color: grey;
	}
	</style>
</head>
<body>
	<div id="content">
		<h1>Confirm your Order</h1><br>
		<p>Total Amount to be paid <?php session_start(); echo $_SESSION['total']; ?></p>
		<p>Payment method selected <?php echo $_SESSION['payment'];?>
		<p>Address
		<?php 
			if (isset($_POST['submit'])){
				if(isset($_POST["address"]))
					echo $_POST["address"];
			}
		?>	
		<br><br><br>
		<button onclick="location.href='thanks.html';"><h3>Confirm Order</h3></button>
		<p><b><a href="address.php">Go Back</a></b></p>
	</div>
</body>
</html>