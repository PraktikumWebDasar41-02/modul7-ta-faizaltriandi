<?php
require_once("koneksi.php");



$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jk=$_POST['jk'];
$prodi=$_POST['prodi'];
$fakultas=$_POST['fakultas'];
$asal=$_POST['asal'];
$motto=$_POST['motto'];



$sql = "UPDATE datamahasiswa SET nama='$nama',jenis_kelamin='$jk',prodi='$prodi',fakultas='$fakultas',asal='$asal',moto='$moto'  WHERE nim='$nim'";

if (mysqli_query($koneksi, $sql)) {
    echo "data berhasil diupdate";
}else {
    echo "tidak dapat update record: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
echo "menuju <a href='detail.php'>link ini</a> untuk melanjutkan";