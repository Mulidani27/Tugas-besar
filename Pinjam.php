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
</style>
<ul>	
<li><a href= "Tugas besar Home.html">Perpustakaan BETA&nbsp;</a></li>
<li><img src= "logo perpus.png" height="50"></li>
<li style="float:right" ><a href= "Pinjam.php" class=".beta">Pinjam&nbsp;</a></li>
<li style="float:right"><a href= "Daftar buku.html" class=".beta">Buku&nbsp;</a></li>
<li style="float:right"><a href= "Tugas besar Home.html" href="#home" class=".beta">Home&nbsp;</a></li>
</ul>

<form style="/*! padding: inherit; *//*! border: 100px; *//*! padding-bottom: ; *//*! padding-bottom: 100px; */padding-top: 50px;/*! padding-bottom: px; */">
<fieldset style="/*! padding: unset; *//*! padding-bottom: 200px; */width: 98%;height: 100%;">
<legend>PINJAM BUKU</legend>
<table style="/*! position: */padding-bottom: 50;padding-top: 50;" cellspacing="1" border="0" align="center">
		<thead>
			<tr>
				<th width="400px" height="50">Tanggal Kembali <input type="textarea" placeholder="Tanggal Kembali.." name="userid" id="userid" required=""></th>
				<th width="400px">Nama siswa <input type="textarea" placeholder="Masukkan Nama siswa.." name="siswa" id="siswa" required=""></th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<th width="400px" height="100px">Tangga Pinjam&nbsp;&nbsp;				  <input type="textarea" placeholder="Masukkan tgl pinjam.." name="pinjam" id="pinjam" required=""></th>
				<th>No. Anggota	<input type="textarea" placeholder="Masukkan no anggota.." name="anggota" id="anggota" required=""></th>
			</tr>
</tbody></table><table style="background-color: B2FBB1;" width="100%" height="10%" border="0">
  <tbody>
    <tr>
      <th height="50px">Data Buku</th>
    </tr>
  </tbody>
  </table>
 <button type="submit"><div class="submit">Cetak</div></button>
 <table cellspacing="1" align="center">
 <tbody><tr>
		<th width="400px" height="100px">Kode Buku	 <input type="textarea" placeholder="Masukkan kode buku.." name="kode" id="kode" required=""></th>

		<th width="400px" height="100px">Judul Buku <input type="textarea" placeholder="Masukkan Judul buku.." name="judul" id="judul" required=""></th>
		
		</tr>
 </tbody></table>

	

</fieldset></form>
<div class="footer">
<h3>©KHAIRIN SAJIDA</h3><table>

</table>

</div><input id="ext-version" type="hidden" value="1.3.6"></body></html>