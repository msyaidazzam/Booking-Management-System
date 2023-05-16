<?php include("config.php"); ?>
<?php
 session_start();
 // cek apakau user sudah login
 if($_SESSION['login'] == false||$_SESSION['pekerjaan'] !="MS"){
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
                <li><a href="IndexServisMS.php">Index Service</a></li>
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
   
        <form class="form" action="BookingEditMSProses.php" method="GET"> 
        Nama :
            <label><?php echo $data['Nama'];?></label>
        <br>
        No. Telp :
            <label><?php echo $data['Telp'];?></label>
            <br>
        Alamat :
        <label><?php echo $data['Alamat'];?></label>
            <br>
        Tanggal Service :
        <label><?php echo date($data['TanggalService']); ?></label>
            <br>
        Tipe Mobil :
        <label><?php echo $data['TipeMobil'];?></label>
            <br>
        Tahun Mobil :
        <label><?php echo $data['TahunMobil'];?></label>
             <br>
        Plat Nomor :
        <label> <?php echo $data['PlatMobil'];?></label>
            <br>
        Keluhan :
        <label> <?php echo $data['Keluhan'];?></label>
        <br>
        Teknisi : 
        <label><select name="Teknisi">
								<option selected value="<?php echo $data['Teknisi'];?>"><?php echo $data['Teknisi'];?></option>
                                <?php
                                    $sqlTkn="SELECT * FROM `teknisi`";
                                    $query = mysqli_query($db, $sqlTkn);
				                    while($dataTkn = mysqli_fetch_array($query)){
                                    echo "<option>".$dataTkn['Nama']."</option>";
                                    }?>
                                </select></label>
           <br>
           Status : 
           <label> <select name="Status">
								<option selected value="<?php echo $data['Status'];?>"><?php echo $data['Status'];?></option>
                                <option>Proses</option>
                                <option>Pengerjaan</option>
                                <option>Selesai</option>
                                </select></label>
           <br>

        <input type = "hidden" name = "id" value = "<?php echo $data['ID'];?>" />
            <input class="tombol" value="Submit" type="submit" id="bt" />
        </form>
        </div>
        
</body>
</html>