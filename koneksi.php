<?php
session_start();
require_once("database.php");
 
$nim=$_POST['nim'];
$_SESSION['nim'] = $nim;

$nama=$_POST['nama'];
$_SESSION['nama'] = $nama;

$jeniskelamin=$_POST['jk'];
$_SESSION['jk'] = $jeniskelamin;

$prodi=$_POST['prodi'];
$_SESSION['prodi'] = $prodi;

$fakultas=$_POST['fakultas'];
$_SESSION['fakultas'] = $fakultas;

$asal=$_POST['asal'];
$_SESSION['asal'] = $asal;

$motohidup = $_POST['motohidup'];
$_SESSION['motohidup'] = $motohidup;

$sql ="INSERT INTO datamahasiswa(nim,nama,jenis_kelamin,prodi,fakultas,asal,moto_hidup) values ('$nim','$nama','$jeniskelamin','$prodi','$fakultas','$asal','$motohidup')";


if(mysqli_query($conn,$sql)){
 header("Location:view.php");
}else{
	echo"error ;{:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?> 