<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biodata Siswa</title>
</head>
<body>
	<h1 align="center">Form Biodata Siswa</h1>
	<p align="center"><a href="form_siswa.php"><button>Tambah Data</button></a></p>
	<table align="center"border="1">
		<tr bgcolor="blue">
			<th >Nis</th>
			<th > Nama Siswa</th>
			<th >Alamat Siswa</th>
			<th>Kelas</th>
			<th >Jurusan</th>
			<th >No telepon</th>
			<th >Aksi</th>
		</tr>
		<?php
			$sql=mysqli_query($konek,"select*from biodata_siswa");
			while ($tampil=mysqli_fetch_array($sql)) {
		
		?>
		<tr>
			<td><?php echo $tampil ['nis'];?></td>
			<td><?php echo $tampil ['nama_siswa'];?></td>
			<td><?php echo $tampil ['alamat_siswa'];?></td>
			<td><?php echo $tampil ['kelas'];?></td>
			<td><?php echo $tampil ['jurusan'];?></td>
			<td><?php echo $tampil ['no_tlp'];?></td>
			<td>
				<a href="edit.php?nis=<?php echo$tampil['nis'];?>">Edit</a>
				<a href="hapus.php?nis=<?php echo $tampil['nis'];?>">Hapus</a>
			</td>
		</tr>
		<?php
	       }
		?>
	</table>
</body>
</html>