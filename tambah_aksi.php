<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$tl = $_POST['tl'];
$ttgl = $_POST['ttgl'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$as = $_POST['as'];
$email = $_POST['email'];
$hobi = $_POST['hobi'];
$ps = $_POST['ps'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$tl','$ttgl','$alamat','$jk','$agama','$as','$email','$hobi','$ps')");
 
// mengalihkan halaman kembali ke index.php
header("location:index1.php");
 
?>