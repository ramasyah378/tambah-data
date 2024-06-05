<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>view</title>
</head>

<body>
<center>
	<h2>DATA MAHASISWA</h2>
</center>
<table border="1" align="center" width="550px" cellpadding="5px">
		<tr>
			<th width="50%" bgcolor="#0099FF">Nama</th>
			<th width="50%" bgcolor="#0099FF">Tempat Tanggal Lahir</th>
			<th width="50%" bgcolor="#0099FF">Alamat</th>
			<th width="50%" bgcolor="#0099FF">Jenis Kelamin</th>
			<th width="50%" bgcolor="#0099FF">Agama</th>
			<th width="50%" bgcolor="#0099FF">Asal Sekolah</th>
			<th width="50%" bgcolor="#0099FF">Email</th>
			<th width="50%" bgcolor="#0099FF">Hobi</th>
			<th width="50%" bgcolor="#0099FF">Kesan</th>
  		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from data mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>				
				<td bgcolor="#99CCFF"><?php echo $d['nama']; ?></td>
				<td bgcolor="#99CCFF"><?php echo $d['tempat_tanggal_lahir']; ?></td>
				<td bgcolor="#99CCFF"><?php echo $d['alamat']; ?></td>
				<td bgcolor="#99CCFF"><?php echo $d['jenis_kelamin']; ?></td>
				<td bgcolor="#99CCFF"><?php echo $d['agama']; ?></td>
				<td bgcolor="#99CCFF"><?php echo $d['asal_sekolah']; ?></td>
				<td bgcolor="#99CCFF"><?php echo $d['email']; ?></td>
				<td bgcolor="#99CCFF"><?php echo $d['hobi']; ?></td>
				<td bgcolor="#99CCFF"><?php echo $d['kesan']; ?></td>	
				<td bgcolor = "FFFFoo">
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit ||</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
            
			<?php 
		}
		?>
        
</table>
<table align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img style="position: absolute;margin-left: -110px; margin-top: 15px;" src="images/logo.jpg" width="31" height="31">
    		<a href="?page=addguestbook" style="position: absolute; margin-top: 20px;margin-left: -70px;">+ Tambah Data</a>
		</td>
	</tr>
</table>
    
</body>
</html>
