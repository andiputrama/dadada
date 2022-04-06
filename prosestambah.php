<?php
include 'koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];

$query=mysqli_query($koneksi, "INSERT INTO gudang(id, nama, jumlah) VALUES ('$id', '$nama', '$jumlah')")
or die(mysqli_error($koneksi));

if($query){
	echo "<meta http-equiv='refresh' content='1; url=index.php'>";
}else{
	echo "Gagal input data";
}

?>