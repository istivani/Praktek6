<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbpegawai");
if(!$koneksi){
    die("connection failed : " . mysqli_connect_error());
}
?>