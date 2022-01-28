<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_hewan = $_POST['nama_hewan'];
$nim = $_POST['golongan'];
$alamat = $_POST['habitat'];
 
// update data ke database
mysqli_query($koneksi,"update hewan set nama_hewan='$nama_hewan', golongan='$golongan', habitat='$habitat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>