<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$pengarang = $_POST['pengarang'];
	$ringkasan = $_POST['ringkasan'];
	$cover = $_POST['cover'];
	$stok = $_POST['stok'];
	$id_kategori = $_POST['id_kategori'];

	$sql = "INSERT INTO buku (judul, penerbit, pengarang, ringkasan, cover, stok, id_kategori) VALUES ('$judul', '$penerbit', '$pengarang', '$ringkasan', 'cover', '$stok', '$id_kategori')";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

	if($count){
		echo "<script>alert('Data berhasil ditambahkan.');window.location='index.php';</script>";
	}

	
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
