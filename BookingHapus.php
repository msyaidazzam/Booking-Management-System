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
$status = $_GET['status'];
 // buat query update

 if($status!="Pengerjaan"){
$sql = "DELETE FROM `listservis` WHERE ID = $id";
 $query = mysqli_query($db, $sql);
 }
 else{
    header('Location: IndexServisCS.php?p=Dalam Pengerjaan');
 }
 // apakah query update berhasil?
 if( $query ) {
 header('Location: indexServisCS.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan... $sql");

 }
 
?>
