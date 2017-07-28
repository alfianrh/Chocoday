<?php
	include '../model/dbConnect.php';
	//isset untuk menanyakan apakah ada datanya atau tidak.
	$username =isset($_POST['txtUsername']) ? $_POST['txtUsername'] : "null";
	$password =isset($_POST['txtPassword']) ? $_POST['txtPassword'] : "null";



	move_uploaded_file($_FILES['img_user']['tmp_name'], '../../img/' . basename($img));

	// $kueri = "INSERT INTO user(nama, username, password, tgl_lahir, gender, email, img_user) VALUES (?, ?, ?, ?, ?, ?, ?)";
	$kueri = "INSERT INTO user(username, password) VALUES (?,?)";
	$masuk = $db->prepare($kueri);
	// $masuk->execute(array($nama, $username, $password, $tgl_lahir, $gender, $email, basename($img)));
	$masuk->execute(array($username, $password));
	header("Location:../view/login.php");
?>
