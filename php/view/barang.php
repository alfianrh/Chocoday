<?php
  session_start();
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <?php
      if (isset($_SESSION['username']))
      {
        echo '<br>Anda Masuk sebagai : '.$_SESSION['username'];
      }
      echo "<h1>DAFTAR PRODUK</h1>
      <ul>";
      include '../model/dbConnect.php';
      $stmt ="SELECT * FROM barang ORDER BY id_barang";
      foreach($db->query($stmt) as $row){
        echo"<li> $row[nama_barang] : $row[harga_barang] || <a href='../controller/keranjang.con.php?id=$row[id_barang]'>Beli</a></li>";
      }
      echo"</ul>";
      ?>

    </div>
  </body>
</html>
