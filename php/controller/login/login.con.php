<?php

  session_start();
  include_once '../../model/dbConnect.php';
  // $var_username = $_POST[]

  $username = $_POST['txtUsername'];
  $password = $_POST['txtPassword'];

  $kueri = "SELECT * FROM user WHERE username = (?)";
  $kueri = $db->prepare($kueri);
  $kueri->execute(array($username));
  $data = $kueri->fetch();


  if ($username == $data['username']) {
    if ($password == $data['password']) {
      $_SESSION['username'] = $username;
      header("Location:../../view/barang.php");
    } else {
      echo "password salah";
    }
  } else {
    echo "anda belum terdaftar <br>";
    echo"<a href='../../view/regristasi.php'>Daftar kembali</a>";
    echo"<a href='../../view/barang.php'>Lihat Katalog</a>";
  }
?>
