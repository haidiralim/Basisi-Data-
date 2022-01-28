<?php 
// koneksi database
include 'koneksi.php';
 

$nama_hewan = $_POST['nama_hewan'];
$golongan = $_POST['golongan'];
$habitat = $_POST['habitat'];
 if (!empty($nama_hewan) || !empty($golongan) || !empty($habitat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into hewan values('','$nama_hewan','$golongan','$habitat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>