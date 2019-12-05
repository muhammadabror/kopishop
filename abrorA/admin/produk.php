<?php
require 'functions.php';

$produk = query("SELECT * FROM produk");
?>

<html>
	<head>
		<title>pemesanan HotKopi</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	</head>
	<style>
		.image{
			border-radius: 95% !important;
			width: 105px;
			height: 100px;
		}
	</style>
	<body>
		<div class="container">
			<div class="card-panel">
				<center><h5 style="color: black;">DATA HotKopi</h5></center>
		<a href="makananadd.php" class="waves-effect waves-light btn">Tambah HotKopi</a>

		<table class="responsive-table">
			<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Gambar</th>
				<th>Deskripsi</th>
				<th>Asal</th>
				<th>Bahan</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<?php  $i = 1;?>
			<?php foreach ($produk as $row):?>
			<tbody>
			<tr>
				<td><?=	 $i; ?></td>
				<td><?= $row ["nama_produk"];?></td>
				<td><img src="img/<?= $row ["gambar_produk"]; ?>" class="image"></td>
				<td><?= $row ["deskripsi_produk"];?></td>
				<td><?= $row["asal_produk"];?></td>
				<td><?= $row["bahan_produk"];?></td>
				<td>
					<a href="produkedit.php?id_produk=<?= $row ["id_produk"]; ?>" class="btn-floating btn-small waves-effect waves-light teal"><i class="small material-icons">edit</i></a>
					
					<a href="produkdel.php?id_produk=<?= $row ["id_produk"]; ?>" onclick ="return confirm('Apakah Ingin Menghapus?');" class="btn-floating btn-small waves-effect waves-light red"><i class="small material-icons">delete</i></a>
				</td>
			</tr>
			</tbody>
			<?php $i++;?>
		<?php endforeach;?>
		</table>
	</body>
</html>