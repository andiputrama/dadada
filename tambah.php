<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<meta http-equiv-"X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style type="text/css">
			body {
				background-image: url(malam.png);
				background-size: cover;
				background-attachment: fixed;
			}
	</style>
</head>
<body>
    <nav class="navbar navbar-brand">
			<a class="" href="index.php" style="color:#d9ccbf; ">Home</a>
			<a class="" href="index.php" style="color:#d9ccbf; ">|</a>
            <a class="" href="tambah.php" style="color:#d9ccbf;">Tambah Data</a>
            <hr width="device-width">
        </nav>
	<div class="box">
	<div class="container">
		<h1 style="color:#d9ccbf; ">Tambah Data</h1>
		<div class="col-md-6">
			<form action="prosestambah.php" method="post">
				<label for="id" style="color:#d9ccbf; ">ID Item</label>
				<input type="number" class="form-control" name="id">
				<label for="nama" style="color:#d9ccbf; ">Nama Item</label>
				<input type="text" class="form-control" name="nama">
				<label for="jumlah" style="color:#d9ccbf; ">Jumlah Item</label>
				<input type="text" class="form-control" name="jumlah">
				<button class="btn btn-primary mt-1" type="submit" name="button">Simpan Data</button>
			</form>
		</div>
	</div>
</body>
</html>