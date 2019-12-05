<?php
require 'functions2.php';

$makanan = query("SELECT * FROM makanan");
?>

<html>
	<head>
		<title>pemesanan Drinkopi</title>
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
				<center><h5 style="color: black;">DATA DrinkKopi</h5></center>
		<a href="makananadd.php" class="waves-effect waves-light btn">Tambah DrinkKopi</a>

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
			<?php foreach ($makanan as $row):?>
			<tbody>
			<tr>
				<td><?=	 $i; ?></td>
				<td><?= $row ["nama_makanan"];?></td>
				<td><img src="img/<?= $row ["gambar_makanan"]; ?>" class="image"></td>
				<td><?= $row ["deskripsi_makanan"];?></td>
				<td><?= $row["asal_makanan"];?></td>
				<td><?= $row["bahan_makanan"];?></td>
				<td>
					<a href="makananedit.php?id_makanan=<?= $row ["id_makanan"]; ?>" class="btn-floating btn-small waves-effect waves-light teal"><i class="small material-icons">edit</i></a>
					
					<a href="makanandel.php?id_makanan=<?= $row ["id_makanan"]; ?>" onclick ="return confirm('Apakah Ingin Menghapus?');" class="btn-floating btn-small waves-effect waves-light red"><i class="small material-icons">delete</i></a>
				</td>
			</tr>
			</tbody>
			<?php $i++;?>
		<?php endforeach;?>
		</table>
	</body>
</html>