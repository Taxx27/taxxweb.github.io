<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Data Siswa</title>
</head>
<body>
<h1 align="center">Form Data Siswa</h1>
<form method="post" action="simpan_siswa.php">
<table border="0" align="center">
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td>
			<input type="text" name="txtnis" id="txtnis" placeholder="Masukan Nis"placeholder="Masukan NIS" required>
		</td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td>
			<input type="text" name="txtnamasiswa" id="txtnamasiswa" placeholder="Masukan Nama Siswa" required>
		</td>
	</tr>
	<tr>
		<td>Alamat Siswa</td>
		<td>:</td>
		<td>
			<input type="text" name="txtalamatsiswa" id="txtalamatsiswa" placeholder="Masukan Alamat Siswa" required>
		</td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td>
			<select name="txtkelas">
				<option value="XI RPL 1">XI RPL 1</option>
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
				<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
				<option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
				<option value="Teknik Sepeda Motor">Tenik Sepeda Motor</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>No Telepon</td>
		<td>:</td>
		<td>
			<input type="text" name="txtnotlp" id="txtnotlp" required>
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
</body>
</html>