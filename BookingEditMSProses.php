<?php include("config.php"); ?>
<?php
 session_start();
 // cek apakau user sudah login
 if($_SESSION['login'] == false||$_SESSION['pekerjaan'] !="MS"){
  header('Location: index.php');
 }
?>
<?php
$id = $_GET['id'];
$status = $_GET['Status'];
$teknisi = $_GET['Teknisi'];

 // buat query update
$sql = "UPDATE `listservis` SET `Teknisi`='$teknisi',`Status`='$status' WHERE ID = $id";
 $query = mysqli_query($db, $sql);

 // apakah query update berhasil?
 if( $query ) {
 header('Location: indexServisMS.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan... $sql");

 }
 
?>