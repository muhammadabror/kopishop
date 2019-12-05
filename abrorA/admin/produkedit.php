<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';
	
	$id_produk = $_GET["id_produk"];

	$produk = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
if (isset($_POST["submit"])) {
	
	if(ubah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Diubah');
				document.location.href = 'index.php?p=produk';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Diubah')
				document.location.href = 'index.php?p=produk';
		</script>";
	}

}
?>
<html>
	<head>
		<title>Ubah Data HotKopi</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	</head>
	<style> 
		.image{
			width: 100%;
			padding: 10px;
		}
	</style>
	<body>
		<div class="container">
			<div class="card-panel">
			<h5 style="font-family: arial;">Ubah Data Hotkopi</h5>
		
		<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id_produk" value="<?= $produk["id_produk"]; ?>" required>
				<input type="hidden" name="gambar_produk" value="<?= $produk["gambar_produk"]; ?>" required>
			<ul>
			<li>
				<label for="nama_produk">Nama HotKopi :</label>
				<input type="text" name="nama_produk" id="nama_produk" value="<?= $produk["nama_produk"]; ?>" required>
			</li>
			<li>
				<label for="gambar_produk">Gambar HotKopi :</label>
				<img src="">
				<input type="file" name="gambar_produk" id="gambar_produk" required class="image">
				<hr>
			</li>
			<li>
				<label for="deskripsi_produk">Deskripsi HotKopi :</label>
				<input type="text" name="deskripsi_produk" id="deskripsi_produk" value="<?= $produk["deskripsi_produk"]; ?>" required>
			</li>
			<li>
				<label for="asal_produk">Asal HotKopi :</label>
				<input type="text" name="asal_produk" id="asal_produk" value="<?= $produk["asal_produk"]; ?>" required>
			</li>
			<li>
				<label for="bahan_produk">Bahan HotKopi :</label>
				<input type="text" name="bahan_produk" id="bahan_produk" value="<?= $produk["bahan_produk"]; ?>" required>
			</li>
			<button name="submit" type="submit" class="waves-effect waves-light btn">Edit data</button>
		</ul>
	</form>
</div>
</div>
	</body>
</html>