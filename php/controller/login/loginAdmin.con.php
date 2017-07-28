<?php

  session_start();
  include_once '../../model/dbConnect.php';
  // $var_username = $_POST[]

  $username = $_POST['txtUsernameAdmin'];
  $password = $_POST['txtPasswordAdmin'];

  $kueri = "SELECT * FROM admin WHERE username = (?)";
  $kueri = $db->prepare($kueri);
  $kueri->execute(array($username));
  $data = $kueri->fetch();


  if ($username == $data['username']) {
    if ($password == $data['password']) {
      $_SESSION['username'] = $username;
      header("Location:../../view/admin.php");
    } else {
      echo "password salah";
    }
  } else {
    echo "Anda tidak punya akun<br>";
    echo"<a href='../../view/barang.php'>Lihat Katalog</a>";
  }
?>
