<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
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
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', tl='$tl', ttgl='$ttgl', alamat='$alamat', jk='$jk', agama='$agama', as='$as', email='$email', hobi='$hobi', ps='$ps' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index1.php");
 
?>