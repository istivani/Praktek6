<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbbuku_tamu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create table
$sql = "CREATE TABLE buku_tamu (
  Id_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Nama VARCHAR(200) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  Isi TEXT
)";

if (mysqli_query($conn, $sql)) {
  echo "Table buku_tamu created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
