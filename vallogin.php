<?php
$username   = $_POST['userid'];
$pass       = $_POST['pass'];

include 'config.php';

$user = mysqli_query($connect,"select * from form where userid='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['username'] = $row['username'];
    header("location:Tugas_besar_Home.php");
}else
{
	session_start();
	$_SESSION['pesan'] = "Password atau Username Anda salah!";
    header("location:formprojek.php       ");
}	
?>