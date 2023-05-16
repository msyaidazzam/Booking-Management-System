<?php
include("config.php"); 
session_start();

 $user = $_POST['username'];
 $pass = $_POST['password'];

if(!empty($user) and !empty($pass)){
	$sql = "SELECT * FROM admin";
	$query = mysqli_query($db, $sql);
	while($data = mysqli_fetch_array($query)){
		if($user == $data['Username'] and $pass == $data['Password']){
		   $_SESSION['login'] = true;
		   $_SESSION['pekerjaan'] = $data['Pekerjaan'];
		   $_SESSION['admin'] = $data['Nama'];
			header('Location:IndexServis'.$data['Pekerjaan'].'.php');
		}
		elseif($user != $data['Username'] and $pass != $data['Password']){
			header('Location:index.php?p=username dan password salah');
		}
	}
}
else{
  header('Location:index.php?p=username dan password tidak boleh kosong');
}
?>
