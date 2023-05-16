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
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</nav>
		
	</header>
    <form class="container" method="GET">
        <span class="teks-normal" >Pencarian </span>
        <input type = "text" onfocus = "this.value=''" name = "pencarian" value = ""/>
        <button class="tombol" type="submit" name="submit">Tampilkan</button>
    </form>
 		<div class="body-table">
       <table>
        <tr>
		<th>ID</th>
        <th> Nama</th>
		<th> Alamat</th>
		<th> No. Telp</th>
		<th> Tipe Mobil </th>
		<th> Tahun Mobil</th>
		<th> Plat Mobil</th>
        <th> Keluhan</th>
        <th> Tanggal Servis</th>
        <th> Teknisi</th>
        <th> Status</th>
        <th> Edit</th>
		<th> Hapus</th>
        <th> Print</th>
</tr>
        <?php   
				if (isset($_GET['submit'])) {
					$cari=$_GET['pencarian'];
					// perintah tampil semua data
					if (!empty($cari)) {
						// perintah cari  data berdasarkan kode barang atau nama barang
						$sql = "SELECT * FROM `listservis` WHERE Nama LIKE '%$cari%' OR  Alamat LIKE '%$cari%' OR  Telp LIKE '%$cari%' OR  TanggalService LIKE '%$cari%' OR  TipeMobil LIKE '%$cari%' OR  TahunMobil LIKE '%$cari%' OR  PlatMobil LIKE '%$cari%' OR  Keluhan LIKE '%$cari%' OR Keluhan LIKE '%$cari%' OR Status LIKE '%$cari%' OR Teknisi LIKE '%$cari%' ";
					}else {
						// perintah tampil semua data
						$sql = "SELECT * FROM `listservis` ORDER by TanggalService DESC";
					}
				}
				else{
						// perintah tampil semua data
						$sql = "SELECT * FROM `listservis`ORDER by TanggalService DESC";
				}
				
				$query = mysqli_query($db, $sql);
				while($data = mysqli_fetch_array($query)){
					echo "<tr>";
					echo "<td>".$data['ID']."</td>";
					 echo "<td>".$data['Nama']."</td>";
					 echo "<td>".$data['Alamat']."</td>";
					 echo "<td>".$data['Telp']."</td>";
					 echo "<td>".$data['TipeMobil']."</td>";
					 echo "<td>".$data['TahunMobil']."</td>";
					 echo "<td>".$data['PlatMobil']."</td>";
                     echo "<td>".$data['Keluhan']."</td>";
					 echo "<td>".$data['TanggalService']."</td>";
					 echo "<td>".$data['Teknisi']."</td>";
					 echo "<td>".$data['Status']."</td>";
					 echo "<td><a href=BookingEditCS.php?id=".$data['ID'].">EDIT</td>";
					 echo "<td><a href=BookingHapus.php?id=".$data['ID']."&status=".$data['Status'].">HAPUS</td>";
					 echo "<td><a href=invoiceMS.php?id=".$data['ID'].">PRINT</td>";
					 }
					 ?>
				
				
			
			</table> 
					</div>
					</body>
					</html>