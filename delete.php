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
$sq = "SELECT * FROM components WHERE name='$id'";
$result = $conn->query($sq);

if ($result->num_rows > 0) {
	$q = "DELETE FROM components WHERE name='$id'";
    $result1 = $conn->query($q);
    echo "Values deleted successfully";
    }
else
    {
    	echo "Values do not exist";
    }
$conn->close();
?>