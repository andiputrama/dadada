<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<meta http-equiv-"X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style type="text/css">
			body {
				background-image: url(siang.jpg);
				background-size: cover;
				background-attachment: fixed;
			}
			.box{
				height: 350px;
				width: 540px;
				background-color: #f7f4f2;
				position: center;
				margin-top: 20px;
				margin-left: +30px;
				padding-top: 5px;
				left: 50%;
				opacity: 0.75;
			}
	</style>
</head>
<body>
<nav class="navbar navbar-brand">
			<a class="" href="index.php" style="color:#000000; ">Home</a>
			<a class="" href="index.php" style="color:#000000; ">|</a>
            <a class="" href="tambah.php" style="color:#000000;">Tambah Data</a>
            <hr width="device-width">
        </nav>
	<div class="box">
	<div class="container">
	<h1>Update Data Inventory</h1>
	<?php
		include 'koneksi.php';
		$id=$_GET['id'];
		$data=mysqli_query($koneksi, "SELECT * FROM gudang WHERE id='$id' ") or die(mysqli_error($koneksi));
		$baris=mysqli_fetch_array($data);
	?>
    </div>
	<div class="col-md-6">
	    <form action="prosesupdate.php?id=<?php echo $id ?>" method="post">
	    	<label for="id">ID Item</label>
				<input type="number" class="form-control" name="id">
				<label for="nama">Nama Item</label>
				<input type="text" class="form-control" name="nama">
				<label for="jumlah">Jumlah Item</label>
				<input type="text" class="form-control" name="jumlah">
				<button class="btn btn-primary" type="submit" name="button">Simpan Data</button>
		</form>
	</div>
</body>
</html>