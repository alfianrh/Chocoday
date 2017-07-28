<?php
session_start();
include "../model/dbConnect.php";
// fungsi untuk mendapatkan isi keranjang belanja
  try {

    function isi_keranjang(){
        $isikeranjang = array();
        $sid = session_id();
        $sql = "SELECT * FROM transaksi WHERE id_transaksi='$sid'";
        $masuk = $db->prepare($sql);
        $masuk->execute(array();
        //
        // foreach ($db->query($sql) as $row) {
        //   $isikeranjang[] = $db->query($sql);
        // }
        return $isikeranjang;
    }

  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }

?>
