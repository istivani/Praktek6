<?php
include 'koneksi.php';

//Mengambil data
$id = $_POST['id'];

//Input data
mysqli_query($koneksi, "DELETE FROM `data_pegawai` WHERE `data_pegawai`.`id` = $id");


//Kembali ke halaman awal
header("location:homepage.php");
?>