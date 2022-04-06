<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<meta http-equiv-"X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tampilan Data gudang</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style type="text/css">
			body {
				background-image: url(bb.png);
				background-size: cover;
				background-attachment: fixed;
			}
			.box{
				height: 300px;
				width: 550px;
				background-color: #fcf9f7;
				position: center;
				margin-top: 20px;
				margin-left: 10px;
				padding-top: -35px;
				left: 50%;
				opacity: 0.6;
			}
		</style>
</head>
<body>
<nav class="navbar navbar-brand">
            <a class="" href="index.php" style="font-family: multicolore;">Home</a>
			<a class="" href="index.php" >|</a>
            <a class="" href="tambah.php" style="font-family: multicolore;">Tambah Data</a>
            <hr width="device-width">
        </nav>
	<DIV ALIGN = "CENTER">
	<div class="box">
	<div class="container">
	<center><h1 style="font-family: sans;">Inventory</h1></center>
	<p><a href = tambah.php>+ Tambah Data</a>
	<table border="1">
		<thead>
			<th>ID Item</th>
			<th>Nama Item</th>
			<th>jumlah Item</th>
			<th>Aksi</th>
		</thead>
		<tbody>
		<?php
		include 'koneksi.php';
		$data=mysqli_query($koneksi, "SELECT * FROM gudang") or die (mysqli_error($koneksi));
		foreach($data as $baris){ ?>
		<tr>
			<td><?php echo $baris['id'] ?></td>
			<td><?php echo $baris['nama'] ?></td>
			<td><?php echo $baris['jumlah'] ?></td>
			<td>
				<a href="update.php?id=<?php echo $baris['id'] ?>" class="btn btn-success">Update</a>
				<a href="delete.php?id=<?php echo $baris['id'] ?>" class="btn btn-danger">Delete</a>
			</td>
		<?php } ?>
		</tbody>
</body>
</html>