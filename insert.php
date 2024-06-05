<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data </title>
</head>
<body>
 
	<h2>PENGOLAHAN DATA MAHASISWA </h2>
	<br/>
	
	
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tempat lahir</td>
				<td><input type="text" name="tl"></td>
			</tr>
			<tr>
				<td>Tanggal lahir</td>
				<td><input type="date" name="ttgl"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
            <td><input type="radio" name ="jk" value="Laki-Laki">
              Laki-Laki
            <input type="radio" name="jk" value="Perempuan">
              Perempuan</td>			</tr>
			<tr>
				<td>Agama</td>
				<td><select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Budha</option>
              </select></td>
			</tr>
			<tr>
				<td>Asal sekolah</td>
				<td><input type="text" name="as"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Hobi</td>
     			<td>
				<input type="checkbox" name="hobi" value="Makan" />
				 Makan
     			 <input type="checkbox" name="hobi" value="Membaca" />
      			 Membaca
      			 <input type="checkbox" name="hobi" value="Travelling"  />
      			 Travelling
      			 <input type="checkbox" name="hobi" value="Musik"  />
      			 Musik
      			 <input type="checkbox" name="hobi" value="Musik" />
      			 Olahraga
      			 <input type="checkbox" name="hobi" value="lain-lain" />
      			 lain-lain</td>
			</tr>
			<tr>
				<td height="56">Saran</td>
				<td><textarea name="ps" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	<br/>
	<br/>
	<a href="index1.php">Back</a>
</body>
</html>




<form method="post" action="tambah_aksi.php">
