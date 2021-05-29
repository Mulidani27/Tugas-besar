<html><head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.tulisan{
position: absolute;
top: 52.5%;
right: 29%;
color: #ffef00;
font-size: 20px;
font-family: PT Sans Caption,sans-serif;
font-style: italic;
font-weight: bold;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #6D35EE;
  
}
.city {
        float: left;
        margin: 0px;
        padding: 20px;
        width: 300px;
        height: justify;
        text-align: justify-all;
        border: 0px /solid rgb(245, 222, 179)/;
    }

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
	
li a:hover:not(.active) {
  background-color: goldenrod;
font-size: 19px;
}

.active {
  background-color: #DAA520;
}
.background{
background:url(Tugas_Besar_Kami/logo perpus.png)no-repeat;

}
.logout{
	float: right;
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	
}
.logout:hover:not(.active) {
  background-color: red;
font-size: 19px;}
.tindih{
	position:absolute;
	width :180 px;
	top:135px;
	right:45%;
}
#percantik{
	padding:10px;
}
#back{
float: left;
width: 105px;
height: 45px;
left: 45%;
top: 100%;
background: orange;
border-radius: 21px;
color: white;
font-size: 20px;
font-family: fira-sans;
text-align: center;
text-align-last: center;
border: 0;
padding: 5px;
margin: 10px;
margin-left: 500px;
}
#print{
float: right;
width: 105px;
height: 45px;
left: 45%;
top: 100%;
background: aqua;
border-radius: 21px;
color: white;
font-size: 20px;
font-family: fira-sans;
text-align: center;
text-align-last: center;
border: 0;
padding: 5px;
margin: 10px;
margin-right: 550px;
}

</style>
</head>
<body class="background">



<ul>
<li><a href="#pinjam">Perpustakaan BETA</a></li>
<li><img src="logo perpus.png" height="50"></li>
<li style="float:right"><a href="Pinjam.php" class="">Pinjam</a></li>
<li style="float:right"><a href="Daftarbuku.php" class="">Buku</a></li>
<li style="float:right"><a href="Tugas_besar_Home.php" class="">Home</a></li>
 <a class="logout" href="logout.php">Logout</a><a>
</a></ul><a>


<table cellspacing='' align="center" border="1">

	<tr>	<th name="percantik" id="percantik"> NO.</th>
            <th name="percantik" id="percantik">Nama Siswa</th>
            <th name="percantik" id="percantik">No Anggota</th>
			<th name="percantik" id="percantik">Kode Buku</th>
			<th name="percantik" id="percantik">Judul Buku</th>
			<th name="percantik" id="percantik">Tanggal Pinjam</th>
			<th name="percantik" id="percantik">Tanggal Kembali</th>
			<th name="percantik" id="percantik">Aksi</th>
			<th name="percantik" id="percantik">Aksi</th>
				
      </tr>
	  <?php
			include 'config.php';
			$no = 1;
			$data = mysqli_query($connect, "select * from pinjam_akhir");
			while($key = mysqli_fetch_array($data))
			{
		?>
			<tr>
				<td name="percantik" id = "percantik"> <?php echo $no++; ?> </td>
				<td name="percantik" id = "percantik"> <?php echo $key['nama_siswa']; ?> </td>
				<td name="percantik" id = "percantik"> <?php echo $key['no_anggota']; ?> </td>
				<td name="percantik" id = "percantik"> <?php echo $key['kode_buku']; ?> </td>
				<td name="percantik" id = "percantik"> <?php echo $key['judul_buku']; ?> </td>
				<td name="percantik" id = "percantik"> <?php echo $key['tanggal_pinjam']; ?> </td>
				<td name="percantik" id = "percantik"> <?php echo $key['tanggal_kembali']; ?> </td>
				<td name="percantik" id = "percantik"> <a href="editdata.php?id=<?php echo $key['idpinjam']; ?>"> <button style="background-color:orange"> Edit</button></a></td>
				<td name="percantik" id = "percantik"> <a href="hapusdata.php?id=<?php echo $key['idpinjam']; ?>"> <button style="background-color:red"> Hapus</button></a></td>
			</tr>
		<?php
			}
		?>
</tbody></table>
<a href="pinjam.php"><button name="back" id="back" type="button">Back</button></a>
<a href="print.php"><button name="print" id="print" type="button">Print</button></a>
	
	
	

</a><input id="ext-version" type="hidden" value="1.3.6"></body></html>