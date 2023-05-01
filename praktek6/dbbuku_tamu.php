<?php
$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = mysqli_connect($servername, $username, $password);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connec_error());
}

//Create database
$sql = "CREATE DATABASE dbbuku_tamu";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creatig database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>