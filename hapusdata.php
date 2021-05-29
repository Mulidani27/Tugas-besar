<?php
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_GET['id'];
//var_dump($idpinjam);
 
// menginput data ke database
mysqli_query($connect,"delete from pinjam_akhir where idpinjam = '$id'");
//harus berurutan dan sesuai dengan kolom tabel di database. untuk id dikosongkan ''
 
// mengalihkan halaman kembali ke index.php
header("location:tampilpinjam.php");
 
?>