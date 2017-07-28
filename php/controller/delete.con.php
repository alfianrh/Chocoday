<?php

  include '../model/dbConnect.php';
  $sid = session_id();
  // $id = $_GET['id'];

    try {
      //di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
      $db->exec("DELETE FROM transaksi WHERE id_barang=$_GET[id]");
      echo "Data terhapus <br>";
      echo"<a href='../view/keranjang.php'>Kembali Ke keranjang</a><br>";

      // header("Location:../view/keranjang.php");
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


  ?>
