<?php include("config.php"); ?>
<?php
 session_start();
 // cek apakau user sudah login
 if($_SESSION['login'] == false||$_SESSION['pekerjaan'] !="CS"){
  header('Location: index.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
		<title> Pendaftaran Booking Bengkel </title>
		<link rel="stylesheet" href="Style.css">
    </head>
    <body>
	<header class = "main-header">
        <nav class= "nav main-nav">
            <ul><li>Booking Management System</li>
                <li><a href=BookingBaruCS.php>Registrasi Booking</a></li>
                <li><a href="IndexServisCS.php">Index Service</a></li>
			</ul>
		</nav>
		
	</header>
    <body>
    <div class="wrapper">
        <form class="form" action="BookingBaruCSProses.php" method="GET"> 
        Nama
            <input type = "text" onfocus = "this.value=''" name = "nama" value = "Nama Pemilik"/>
            
        No. Telp
            <input type = "text" onfocus = "this.value=''" name = "telp" value = "Nomor Telpon"/>
            <br>
        Alamat
            <input type = "text" onfocus = "this.value=''" name = "alamat" value = "Alamat"/>
            <br>
        Tanggal Service
            <input type = "date" onfocus = "this.value=''" name = "tanggal" value = "tanggal service"/>
            <br>
        Tipe Mobil
            <input type = "text" onfocus = "this.value=''" name = "tipe" value = "Tipe mobil (Avanza...)"/>
            <br>
        Tahun Mobil
             <input type = "text" onfocus = "this.value=''" name = "tahun" value = "tahun mobil"/>
             <br>
        Plat Nomor
        <input type = "text" onfocus = "this.value=''" name = "plat" value = "Nomor plat mobil"/>
            <br>
        Keluhan
        <input type = "text" onfocus = "this.value=''" name = "keluhan" value = "keluhan"/>
        
        <br>
            <input class ="tombol" value="Submit" type="submit" id="bt" />
        </form>
</div>
</body>
</html>