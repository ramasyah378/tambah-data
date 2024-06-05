<?php

include 'koneksi1.php';

$username = $_POST['username'];
$sandi = $_POST['sandi'];

$periksa = mysqli_query("select * from user where username = '$username' AND sandi = '$sandi'");

$sama = mysqli_num_rows($periksa);

if($sama > 0) {
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	header("location:admin/index.php");
} else {
	header("location:view.php");
}
?>