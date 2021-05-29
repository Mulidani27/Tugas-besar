<?php
include 'config.php';
 
// menangkap data yang di kirim dari form
$tanggal_kembali = $_POST['kembali'];
$nama_siswa = $_POST['siswa'];
$tanggal_pinjam = $_POST['pinjam'];
$no_anggota=$_POST['anggota'];
$kode_buku=$_POST['kode'];
$judul_buku=$_POST['judul'];
//var_dump($kode_buku);
 
// menginput data ke database
mysqli_query($connect,"insert into pinjam_akhir values('','$tanggal_kembali','$tanggal_pinjam','$no_anggota','$nama_siswa','$kode_buku','$judul_buku')");
//harus berurutan dan sesuai dengan kolom tabel di database. untuk id dikosongkan ''
 
// mengalihkan halaman kembali ke index.php
header("location:tampilpinjam.php");
 
?>