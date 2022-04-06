<?php
include 'koneksi.php';
$idlama=$_GET['id'];
$id=$_POST['id'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];

$query=mysqli_query($koneksi, "UPDATE gudang SET id='$id', nama='$nama', jumlah='$jumlah' WHERE id='$idlama' ")
or die(mysqli_error($koneksi));

if($query){
	echo "<meta http-equiv='refresh' content='1; url=index.php'>";
}else{
	echo "Gagal update data";
}
?>
