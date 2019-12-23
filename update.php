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
$sq = "UPDATE components SET compatibility='$idd' WHERE name='$id'";
$result = $conn->query($sq);
echo "Values successfully updated";

$conn->close();
?>