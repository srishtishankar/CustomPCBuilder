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

$id = (isset($_POST['textfield']) ? $_POST['textfield'] : '');
$idd = (isset($_POST['textarea']) ? $_POST['textarea'] : '');
$sq = "INSERT INTO reviews VALUES('$id','$idd')";
$result = $conn->query($sq);
echo "Thanks for your valueable feedback :)";

$conn->close();
?>