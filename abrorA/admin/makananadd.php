<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions2.php';
if (isset($_POST["submit"])) {
	
	if(tambah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href = 'index.php?p=makanan';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Ditambahkan')
				document.location.href = 'index.php';
		</script>";
	}

}
?>
<html>
	<head>
		<title>Tambah Data DrinkKopi</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	</head>
	<style>
		.form-control{
			width: 100%!important;
			padding: 10px;
		}
	</style>
	<body>
		<div class="container">
			<div class="card-panel">
			<h5 style="font-family: arial;">Tambah Data DrinkKopi</h5>
		
		<form action="" method="post" enctype="multipart/form-data">
			<ul>
			<li>
				<label for="nama_makanan">Nama DrinkKopi :</label>
				<input type="text" name="nama_makanan" id="nama_makanan" required>
			</li>
			<li>
				<label for="gambar_makanan">Gambar DrinkKopi :</label>
				<input type="file" name="gambar_makanan" id="gambar_makanan" required class="form-control">
				<img src="">
				<hr>
			</li>
			<li>
				<label for="deskripsi_makanan">Deskripsi DrinkKopi :</label>
				<input type="text" name="deskripsi_makanan" id="deskripsi_makanan" required>
			</li>
			<li>
				<label for="asal_makanan">Asal DrinkKopi :</label>
				<input type="text" name="asal_makanan" id="asal_makanan" required>
			</li>
			<li>
				<label for="bahan_makanan">Bahan DrinkKopi :</label>
				<input type="text" name="bahan_makanan" id="bahan_makanan" required>
			</li>
			<button name="submit" type="submit" class="waves-effect waves-light btn">Tambah data</button>
		</ul>
	</form>
</div>
</div>
	</body>
</html>