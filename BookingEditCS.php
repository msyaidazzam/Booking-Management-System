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
    <div class="wrapper">

    <?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM `listservis` WHERE ID = $id";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_array($query);

    ?>
   
        <form class="form" action="BookingEditCSProses.php" method="GET"> 
        Nama
            <input type = "text" onfocus = "this.value=''" name = "nama" value = " <?php echo $data['Nama'];?>"/>
        <br>
        No. Telp
            <input type = "text" onfocus = "this.value=''" name = "telp" value = " <?php echo $data['Telp'];?>"/>
            <br>
        Alamat
            <input type = "text" onfocus = "this.value=''" name = "alamat" value = " <?php echo $data['Alamat'];?>"/>
            <br>
        Tanggal Service
            <input type = "date" name = "tanggal" value = "<?php echo date($data['TanggalService']); ?>"/>
            <br>
        Tipe Mobil
            <input type = "text" onfocus = "this.value=''" name = "tipe" value = " <?php echo $data['TipeMobil'];?>"/>
            <br>
        Tahun Mobil
             <input type = "text" onfocus = "this.value=''" name = "tahun" value = " <?php echo $data['TahunMobil'];?>"/>
             <br>
        Plat Nomor
        <input type = "text" onfocus = "this.value=''" name = "plat" value = " <?php echo $data['PlatMobil'];?>"/>
            <br>
        Keluhan
        <input type = "text" onfocus = "this.value=''" name = "keluhan" value = " <?php echo $data['Keluhan'];?>"/>
        <br>
        <input type = "hidden" name = "id" value = "<?php echo $data['ID'];?>" />
            <input class="tombol" value="Submit" type="submit" id="bt" />
        </form>
</div>
</body>
</html>