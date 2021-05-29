<?php
include 'config.php';
 
// menangkap data yang di kirim dari form
$idpinjam = $_POST['idpinjam'];
$tanggal_kembali = $_POST['kembali'];
$nama_siswa = $_POST['siswa'];
$tanggal_pinjam = $_POST['pinjam'];
$no_anggota=$_POST['anggota'];
$kode_buku=$_POST['kode'];
$judul_buku=$_POST['judul'];
//var_dump($idpinjam);
 
// menginput data ke database
mysqli_query($connect,"update pinjam_akhir set tanggal_kembali='$tanggal_kembali', tanggal_pinjam= '$tanggal_pinjam', no_anggota='$no_anggota', nama_siswa='$nama_siswa', kode_buku='$kode_buku', judul_buku='$judul_buku' where idpinjam='$idpinjam'");
//harus berurutan dan sesuai dengan kolom tabel di database. untuk id dikosongkan ''
 
// mengalihkan halaman kembali ke index.php
header("location:tampilpinjam.php");
 
?>