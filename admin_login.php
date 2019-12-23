<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$id = (isset($_POST['userid']) ? $_POST['userid'] : '');
$idd = (isset($_POST['password']) ? $_POST['password'] : '');
$sq = "SELECT * FROM admin WHERE userid='$id' AND pass='$idd'";
$result = $conn->query($sq);

if ($result->num_rows > 0) {
	header("Location:admin_home.html");
}
else
	echo "Login not successfully please try again";
	$conn->close();
?>