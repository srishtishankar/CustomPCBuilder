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

$id = (isset($_POST['name']) ? $_POST['name'] : '');
$idd = (isset($_POST['compatibility']) ? $_POST['compatibility'] : '');
$sq = "SELECT * FROM components WHERE name='$id' AND compatibility='$idd'";
$result = $conn->query($sq);

if ($result->num_rows > 0) {
	echo "Redundant values";
    }
else
    {
    	$q = "INSERT INTO components VALUES('$id','$idd')";
    	$result1 = $conn->query($q);
    	echo "Values inserted successfully";
    }
$conn->close();
?>