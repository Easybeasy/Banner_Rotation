<?php

$banner = $_POST["banner_bez"];
$b_from = $_POST["aktiv_von"];
$b_to = $_POST["aktiv_bis"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "t_banner_rotation";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO T_BANNER (B_DESCRIPTION, B_FROM, B_TO)
VALUES ('$banner', '$b_from', '$b_to')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>