<?php
include "koneksi.php";

$nis =$_POST['txtnis'];
$nama = $_POST['txtnamasiswa'];
$alamat =$_POST ['txtalamatsiswa'];
$kelas =$_POST['txtkelas'];
$jurusan =$_POST['txtjurusan'];
$notlp =$_POST['txtnotlp'];

mysqli_query($konek,"insert into biodata_siswa values('$nis','$nama','$alamat','$kelas','$jurusan','$notlp')");
header("location;index.php");

?>