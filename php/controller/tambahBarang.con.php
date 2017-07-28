<?php
	include '../model/dbConnect.php';

  $namaBarang =isset($_POST['txtNamaBarang']) ? $_POST['txtNamaBarang'] : "null";
	$hargaBarang =isset($_POST['txtHargaBarang']) ? $_POST['txtHargaBarang'] : "null";
	$jmlBarang =isset($_POST['jmlBarang']) ? $_POST['jmlBarang'] : "null";

	$kueri = "INSERT INTO barang(nama_barang, harga_barang, jml_barang) VALUES (?,?,?)";
	$masuk = $db->prepare($kueri);

	$masuk->execute(array($namaBarang, $hargaBarang, $jmlBarang));
	header("Location:../view/barang.php");
?>
