<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Data Siswa</title>
</head>
<body>
<h1 align="center">Edit Data Siswa</h1>
<?php
	include "koneksi.php";

	$nis = $_GET['nis'];
	$data = mysqli_query($konek,"select * from biodata_siswa where nis='$nis'");
	while($d = mysqli_fetch_array($data)){

	?>
	
<form method="post" action="update.php?nis=<?php echo $d['nis'];?>">
<table border="0" align="center">
	<tr>
	<td>
			<a href="index.php"><button>Kembali</button></a>
		</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td>
			<input type="hidden" name="txtnis" value="<?php echo $d['nis'];?>">
			<input type="text" name="txtnamasiswa" value="<?php echo $d['nama_siswa']; ?>" placeholder="Masukan Nama Siswa" required>
		</td>
	</tr>
	<tr>
		<td>Alamat Siswa</td>
		<td>:</td>
		<td>
			<input type="text"name="txtalamatsiswa" value ="<?php echo $d['alamat_siswa']; ?>"placeholder="Masukan Alamat Siswa" required>
		</td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td>
			<select name="txtkelas">
				<option value="<?php echo $d['kelas'];?>">XI RPL 1</option>
				<option value="XI RPL 2">XI RPL 2</option>
				<option value="XI RPL 3">XI RPL 3</option>
				<option value="XI TKR 1">XI TKR 1</option>
				<option value="XI TKR 2">XI TKR 2</option>
				<option value="XI TKR 3">XI TKR 3</option>
				<option value="XI TSM 1">XI TSM 1</option>
				<option value="XI TSM 2">XI TSM 2</option>
				<option value="XI TSM 3">XI TSM 3</option>

			</select>
		</td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td>
			<select name="txtjurusan">
				<option value="<?php echo $d['jurusan'];?>">Rekayasa Perangkat Lunak</option>
				<option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
				<option value="Teknik Sepeda Motor">Tenik Sepeda Motor</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>No Telepon</td>
		<td>:</td>
		<td>
			<input type="text" name="txtnotlp" value ="<?php echo $d['no_tlp']; ?> " required>
		</td>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit" velue="simpan">Simpan</button>
				<button type="reset" value="Reset">Reset</button>
			</td>
		</tr>
	</tr>
</table>
</form>
<?php
	}
?>
</body>
</html>