<html>
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <?php
      session_start();
      include "../model/dbConnect.php";
      $sid = session_id();
      echo "<h1>LIHAT PESANAN YANG MASUK</h1>";
      try {
        $stmt ="SELECT * FROM transaksi, barang WHERE id_transaksi='$sid' AND transaksi.id_barang=barang.id_barang";
        foreach($db->query($stmt) as $row){
          echo"<tr><td>Nama Barang : $row[nama_barang] |</td>
              <td>id Pemesan : $row[id_transaksi] |</td>
              <td>Jumlah Barang : $row[jml_transaksi] |</td>
              <td>Harga Barang : $row[harga_barang] |</td>
              <td><a href='../controller/delete.con.php?id=$row[id_barang]'>Delete</a></td>
              </tr><br>";
              }
      } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
      ?>

    </div>
  </body>
</html>
