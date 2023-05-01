<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpegawai";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create table
$sql = "CREATE TABLE data_pegawai (
  id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(200) NOT NULL,
  email VARCHAR(50) NOT NULL,
  alamat VARCHAR(200) NOT NULL,
  no_Telp VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table data_pegawai created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
