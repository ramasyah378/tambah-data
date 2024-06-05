<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
</head>
<body>
 
	<h2>PENGOLAHAN DATA MAHASISWA</h2>
	
	
	
	<h3>EDIT DATA MAHASISWA</h3>
 
	
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tempat lahir</td>
					<td><input type="text" name="tl" value="<?php echo $d['tl']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal lahir</td>
					<td><input type="date" name="ttgl" value="<?php echo $d['ttgl']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<tr>
				<td>Jenis kelamin</td>
            <td><input type="radio" name ="jk">
              Laki - Laki
            <input type="radio" name="jk">
              Perempuan</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td><input type="enum" name="agama" value="<?php echo $d['agama']; ?>"></td>
				</tr>
				<tr>
					<td>Asal sekolah</td>
					<td><input type="text" name="as" value="<?php echo $d['as']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td><input type="text" name="hobi" value="<?php echo $d['hobi']; ?>"></td>
				</tr>
				<tr>
					<td>pesan dan kesan</td>
					<td><input type="text" name="ps" value="<?php echo $d['ps']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
	 <br/>
	<br/>
 <a href="index1.php">Back</a>
</body>
</html>
