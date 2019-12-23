<?php require_once("config.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Buy Parts</title>
	<link rel="stylesheet" type="text/css" href="buynow.css">
</head>
<body>
	<h1>Buy the parts and Build your PC Now !</h1>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "pc_components";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}

     	session_start();
     	$mb = $_SESSION['MB'];
     	$Ram = $_SESSION['ram'];
     	$Proc = $_SESSION['processor'];
     	$total = 0;
	?>
<div id="table">
	<table border="2">
   		<tr>
			<th> Name of the part </th>
			<th> Price </th>
		</tr>
		<tr id="tr1">
			<td><?php echo $mb; ?></td>
			<td>
				<?php
					$query1 ="SELECT price FROM motherboard WHERE Mother_Board='$mb'";
     				$result1 = $conn->query($query1);
     				while ($row = $result1->fetch_assoc()) {
    						echo $row['price'];
    						$total = $total +  (int)$row['price'];
					}
				?>
			</td>
		</tr>
		<tr id="tr2">
			<td><?php echo $Ram; ?></td>
			<td>
				<?php
					$query2 ="SELECT price FROM ram WHERE ram='$Ram'";
     				$result2 = $conn->query($query2);
     				while ($row = $result2->fetch_assoc()) {
    						echo $row['price'];
    						$total = $total +  (int)$row['price'];
					}
				?>
			</td>
		</tr>
		<tr id="tr3">
			<td><?php echo $Proc; ?></td>
			<td>
				<?php
					$query3 ="SELECT price FROM processor WHERE Processor='$Proc'";
     				$result3 = $conn->query($query3);
     				while ($row = $result3->fetch_assoc()) {
    						echo $row['price'];
    						$total = $total +  (int)$row['price'];
					}
					$_SESSION['total'] = $total;
				?>
			</td>
		</tr>
		<tr id="tr4">
			<td><b>Total</b></td>
			<td><?php echo "<b>".$total."</b>"; ?></td>
		</tr>
	</table>
</div>

	<h3>Proceed to make payment <a href="payment.php">Click here</a></h3>
	<p><b><a href="getstarted.php">Go Back</a></b></p>

</body>
</html>