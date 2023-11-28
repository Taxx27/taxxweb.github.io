<?php
include "koneksi.php";

$nis = $_GET['nis'];

$nama = $_POST['txtnamasiswa'];
$alamat = $_POST['txtalamatsiswa'];
$kelas = $_POST['txtkelas'];
$jurusan = $_POST['txtjurusan'];
$notlp = $_POST['txtnotlp'];

mysqli_query($konek,"update biodata_siswa set nama_siswa='$nama',alamat_siswa='$alamat',kelas='$kelas',jurusan='$jurusan',no_tlp='$notlp' where nis='$nis'");

header("location:index.php");

?>