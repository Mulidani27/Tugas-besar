<html><head>
</head>
<body>
<style>
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
.geser{
padding-left:450px;
padding-bottom:px;
padding-top:
}
.kembali{

}
.footer {
  padding: 10px;
  text-align: center;
  background:#6D35EE;
  margin-top: 20px;
 }
 .submit{
 /* Rectangle 26 */

position: absolute;
width: 100px;
height: 40px;
left: 40%;
top: 100%;
background: #5C8AFF;
border-radius: 21px;
color: white;
font-size: 31px;
font-family: fira-sans;
text-align: center;
text-align-last: center;
text-size: -18;
padding-left: 5%;
padding-right: 5%;
border: 0
}
#tombol{
position: absolute;
width: 105px;
height: 45px;
left: 45%;
top: 100%;
background: #5C8AFF;
border-radius: 21px;
color: white;
font-size: 20px;
font-family: fira-sans;
text-align: center;
text-align-last: center;
border: 0;
padding: 5px;
margin: 10px;
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

</style>
<ul>	
<li><a href= "Tugas besar Home.html">Perpustakaan BETA&nbsp;</a></li>
<li><img src= "logo perpus.png" height="50"></li>
<li style="float:right" ><a href= "Pinjam.php" class=".beta">Pinjam&nbsp;</a></li>
<li style="float:right"><a href= "Daftarbuku.php" >Buku</a></li>
<li style="float:right"><a href= "Tugas_besar_Home.php"  >Home</a></li>
 <a class="logout" href ="logout.php">Logout<a/>
</ul>

<?php
	include 'config.php';
	$id = $_GET['id'];
	//var_dump($id);
	$data = mysqli_query($connect, "select * from pinjam_akhir where idpinjam = '$id'");
	if(mysqli_num_rows($data) > 0)
	{
		while($key = mysqli_fetch_array($data))
		{
		
?>
<form method ="post" action="updatedata.php" style="/*! padding: inherit; *//*! border: 100px; *//*! padding-bottom: ; *//*! padding-bottom: 100px; */padding-top: 50px;/*! padding-bottom: px; */">
<fieldset style="/*! padding: unset; *//*! padding-bottom: 200px; */width: 98%;height: 100%;">
<legend>PINJAM BUKU</legend>
<table style="/*! position: */padding-bottom: 50;padding-top: 50;" cellspacing="1" border="0" align="center">
		<thead>
			<tr>
			
				<th width="400px" height="50">Tanggal Kembali <input type="date" value ="<?php echo $key['tanggal_kembali'] ?>" placeholder="Tanggal Kembali.." name="kembali" id="kembali" required=""></th>
				<th width="400px">Nama siswa <input type="textarea" value ="<?php echo $key['nama_siswa'] ?>" placeholder="Masukkan Nama siswa.." name="siswa" id="siswa" required=""></th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<th width="400px" height="100px">Tanggal Pinjam<input type="date" value ="<?php echo $key['tanggal_pinjam'] ?>" placeholder="Masukkan tgl pinjam.." name="pinjam" id="pinjam" required=""></th>
				<th>No. Anggota	<input type="textarea" value ="<?php echo $key['no_anggota'] ?>" placeholder="Masukkan no anggota.." name="anggota" id="anggota" required=""></th>
			</tr>
</tbody></table><table style="background-color: B2FBB1;" width="100%" height="10%" border="0">
  <tbody>
    <tr>
      <th height="50px">Data Buku</th>
    </tr>
  </tbody>
  </table>
 <button name="tombol" id="tombol" type="submit">Submit</button>
 <table cellspacing="1" align="center">
 <tbody><tr>
		<th width="400px" height="100px">Kode Buku	 <input type="textarea" value ="<?php echo $key['kode_buku'] ?>" placeholder="Masukkan kode buku.." name="kode" id="kode" required=""></th>

		<th width="400px" height="100px">Judul Buku <input type="textarea" value ="<?php echo $key['judul_buku'] ?>"  placeholder="Masukkan Judul buku.." name="judul" id="judul" required=""></th>
		
		</tr>
 </tbody></table>
 <input type="hidden" value ="<?php echo $key['idpinjam'] ?>" placeholder="Tanggal Kembali.." name="idpinjam" id="idpinjam" required="">
	

</fieldset></form>
<?php
		}
	}
?>
<div class="footer">
<h3>©KHAIRIN SAJIDA</h3><table>

</table>

</div><input id="ext-version" type="hidden" value="1.3.6"></body></html>