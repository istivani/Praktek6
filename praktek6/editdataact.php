<?php
include 'koneksi.php';

//Mengambil data
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
echo $id;

//Input data
mysqli_query($koneksi, "UPDATE `data_pegawai` SET `nama` = '$nama', `email` = '$email', `alamat` = '$alamat', `no_telp` = '$no_telp' 
WHERE `data_pegawai`.`id` = $id;"); 


//Kembali ke halaman awal
header("location:homepage.php");
?>