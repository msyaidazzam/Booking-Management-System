<?php include("config.php"); ?>
<?php
 session_start();
 // cek apakau user sudah login
 if($_SESSION['login'] == false||$_SESSION['pekerjaan'] !="CS"){
  header('Location: index.php');
 }
?>
<?php


$nama = $_GET['nama'];
$telp = $_GET['telp'];
$alamat = $_GET['alamat'];
$tanggal = $_GET['tanggal'];
$tipe = $_GET['tipe'];
$tahun = $_GET['tahun'];
$plat = $_GET['plat'];
$keluhan = $_GET['keluhan'];

 // buat query update
$sql = "INSERT INTO `listservis`(`Nama`, `Alamat`, `Telp`, `TanggalService`, `TipeMobil`, `TahunMobil`, `PlatMobil`, `Keluhan`) 
        VALUES ('$nama','$alamat','$telp','$tanggal','$tipe',$tahun,'$plat','$keluhan')";
 $query = mysqli_query($db, $sql);

 // apakah query update berhasil?
 if( $query ) {
 header('Location:IndexServisCS.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan... $sql");

 }
 
?>