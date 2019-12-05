<?php

$conn = mysqli_connect("localhost","root","","kopishop");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	} 
	return $rows;
}

function tambah($data){
	global $conn;
	$nama_makanan = htmlspecialchars( $data["nama_makanan"]);
	$deskripsi_makanan = htmlspecialchars( $data["deskripsi_makanan"]);
	$asal_makanan = htmlspecialchars( $data["asal_makanan"]);
	$bahan_makanan = htmlspecialchars( $data["bahan_makanan"]);

	$gambar_makanan = upload();
	if(!$gambar_makanan){
		return false;
	}

		$query = "INSERT INTO makanan VALUES ('','$nama_makanan','$gambar_makanan','$deskripsi_makanan','$asal_makanan','$bahan_makanan' )";

	mysqli_query($conn,$query) ;

	return mysqli_affected_rows($conn);

}
function upload(){

	$namaFile = $_FILES['gambar_makanan']['name'];
	$ukuranFile = $_FILES['gambar_makanan']['size'];
	$error = $_FILES['gambar_makanan']['error'];
	$tmpName = $_FILES['gambar_makanan']['tmp_name'];

	if($error === 4){
		echo "<script> alert('Upload Gambar Dahulu') </script>?";
		return false;
	}


	$ekstensiGambarValid = ['jpg' ,'jpeg','png'];
	$ekstensiGambar = explode('.',$namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar,$ekstensiGambarValid)) {
		echo "<script> alert('Yang Diupload Bukan Gambar') </script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru.=$ekstensiGambar;
	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
	return $namaFileBaru;
}	

function hapus($id_makanan){
	global $conn;
	mysqli_query($conn,"DELETE  FROM makanan WHERE id_makanan='$id_makanan'");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id_makanan = $data["id_makanan"];
	$nama_makanan = htmlspecialchars( $data["nama_makanan"]);
	$deskripsi_makanan = htmlspecialchars( $data["deskripsi_makanan"]);
	$asal_makanan = htmlspecialchars( $data["asal_makanan"]);
	$bahan_makanan = htmlspecialchars( $data["bahan_makanan"]);
	$gambar_makanan = htmlspecialchars($data["gambar_makanan"]);
		if($_FILES['gambar_makanan']['error'] === 4){
			$gambar_makanan = $gambarlama;
		} else{
			$gambar_makanan = upload();
		}

		$query = "UPDATE makanan SET nama_makanan = '$nama_makanan',deskripsi_makanan='$deskripsi_makanan',asal_makanan='$asal_makanan',bahan_makanan='$bahan_makanan',gambar_makanan='$gambar_makanan' WHERE id_makanan = $id_makanan";

	mysqli_query($conn,$query) ;

	return mysqli_affected_rows($conn);
}
?>