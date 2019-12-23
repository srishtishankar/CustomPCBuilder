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

$id = (isset($_POST['email']) ? $_POST['email'] : '');
$idd = (isset($_POST['password']) ? $_POST['password'] : '');
$sq = "SELECT * FROM signup WHERE email='$id' AND pass='$idd'";
$result = $conn->query($sq);

if ($result->num_rows > 0) {
    header("Location:getstarted.php");
 }
else
    echo "Login not successfully please try again";
        $conn->close();
?>