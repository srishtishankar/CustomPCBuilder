<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$i = (isset($_POST['username']) ? $_POST['username'] : '');
$id = (isset($_POST['email']) ? $_POST['email'] : '');
$idd = (isset($_POST['password']) ? $_POST['password'] : '');
$sq = "SELECT * FROM signup WHERE email='$id' AND pass='$idd'";
$result = $conn->query($sq);

if ($result->num_rows > 0) {
	echo "Account already exists";
    }
else
    {
    	$q = "INSERT INTO signup VALUES('$i','$id','$idd')";
    	$result1 = $conn->query($q);
    	header("Location:getstarted.php");
    }
$conn->close();
?>