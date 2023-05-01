<?php
include 'koneksi.php';

//Mengambil data 
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

//Input data 
mysqli_query($koneksi,"INSERT INTO `data_pegawai` (`id`, `nama`, `email`, `alamat`, `no_telp`) 
VALUES (NULL, '$nama', '$email', '$alamat', '$no_telp')");

//Kembali ke halaman utama
header("location:homepage.php");
?>