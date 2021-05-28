

	
    <style>
    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: url("Image about life in books by LookingForNeverLand.jpg");
    background-size: cover;
    background-position: fixed;
    background-repeat: no-repeat;
	width: auto;
}

.container{
	
	border-position:auto;
    position: auto;
    left: 471px;
    top: 100px%;
    transform: ;
    padding: 20px 25px;
    width: 50%;
    height:100%;
    border-radius:72px;
	margin-left:25%;
    background-color:#313030;
;
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}

.center
{
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;

}
.container h1{
    text-align: center;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;
}
.container label{
    text-align: center;
    color: #90caf9;
}
.container form input{
	position:center;
	border-radius :14px;
    width: ;100%;
    height:39px;
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: ;
    border-bottom: 2px solid #2979ff;
    //color: #fff;
    font-size: 20px;
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
}
img{
     width: 111px;
     height: 111px;
     position:;
	 }
.jalan{
	width:100%;
	color:cornflowerblue;
	font-size:x-large;
}
</style>
<html>
<head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
	<marquee onmouseover="this.stop()" onmouseout="this.start()" class='jalan' bgcolor="beige">SELAMAT DATANG DI WEBSITE KAMI!!! SILAHKAN MASUKKAN Userid DAN Password</marquee>

        <div class="container" align="center">
		<div class"center">
		<img src="logo perpus.png" align="middle">
          <h1>perpustakaan beta</h1>
            <form method = "post" action="vallogin.php">
                <label>Userid</label><br>
                <input type="textarea" placeholder="Masukan Id..." name="userid" id="userid" required ><br>
                <label>Password</label><br>
                <input type="password" placeholder="Masukkan Password..." name="pass" id="pass" required><br>
                <button type="submit">Masuk</button>
            </form>
			
        </div>     
		</div>
		<?php
		session_start();
		if(isset($_SESSION['pesan']))
		{
			echo $_SESSION['pesan'];
		}
		?>
    </body>

<input id="ext-version" type="hidden" value="1.3.6"></body></html>