<?php

include "koneksi.php";

$nis =$_GET['nis'];

mysqli_query($konek,"delete from biodata_siswa where nis='$nis'");

header("location:index.php");

?>