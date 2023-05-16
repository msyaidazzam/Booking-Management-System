<?php include("config.php"); ?>
<?php
 session_start();
 // cek apakau user sudah login
 if($_SESSION['login'] == false||$_SESSION['pekerjaan'] !="CS"){
  header('Location: index.php');
 }
?>
<?php
$id = $_GET['id'];
$nama = $_GET['nama'];
$telp = $_GET['telp'];
$alamat = $_GET['alamat'];
$tanggal = $_GET['tanggal'];
$tipe = $_GET['tipe'];
$tahun = $_GET['tahun'];
$plat = $_GET['plat'];
$keluhan = $_GET['keluhan'];

 // buat query update
$sql = "UPDATE `listservis` SET `Nama`='$nama',`Alamat`='$alamat', Telp='$telp',`TanggalService`= '$tanggal',`TipeMobil`='$tipe',`TahunMobil`=$tahun,`PlatMobil`='$plat',`Keluhan`='$keluhan',`ID`= $id WHERE ID = $id";
 $query = mysqli_query($db, $sql);

 // apakah query update berhasil?
 if( $query ) {
 header('Location: indexServisCS.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan... $sql");

 }
 
?>