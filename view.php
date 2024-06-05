<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>
 
	<h2>PENGOLAHAN DATA MAHASISWA</h2>
	<br/>
	<a href="insert.php">+ Tambah Mahasiswa</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tempat lahir</th>
			<th>Tanggal lahir</th>
			<th>Alamat</th>
			<th>Jenis kelamin</th>
			<th>Agama</th>
			<th>Asal Sekolah</th>
			<th>Email</th>
			<th>Hobi</th>
			<th>Saran</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tl']; ?></td>
				<td><?php echo $d['ttgl']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['jk']; ?></td>
				<td><?php echo $d['agama']; ?></td>
				<td><?php echo $d['as']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['hobi']; ?></td>
				<td><?php echo $d['ps']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a href="delete.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>