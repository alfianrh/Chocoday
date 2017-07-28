<?php
session_start();

include "../model/dbConnect.php";

$sid = session_id();


  try {
    //di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
    $res = $db->query("SELECT id_barang FROM transaksi WHERE id_barang='$_GET[id]' AND id_transaksi='$sid'");
    $num_rows = $res->fetchColumn();
    if ($num_rows==0){
            // kalau barang belum ada, maka di jalankan perintah insert
            $db->query("INSERT INTO transaksi (id_barang, jml_transaksi, id_transaksi) VALUES ('$_GET[id]', 1, '$sid')");
        } else {
            //  kalau barang ada, maka di jalankan perintah update
            $db->query("UPDATE transaksi SET jml_transaksi = jml_transaksi + 1 WHERE id_transaksi ='$sid' AND id_barang='$_GET[id]'");
        }
        header('Location:../view/keranjang.php');
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }


?>
