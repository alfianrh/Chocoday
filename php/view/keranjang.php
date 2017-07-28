<?php
session_start();
if (!isset($_SESSION['username']))
{
    header('Location: ../view/login.php');
}

$sid = session_id();
include "../model/dbConnect.php";
echo"<h1>Keranjang Belanja</h1>
          <table >
          <tr>
                <th>Nama Produk</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Sub Total</th>
                <th>Option</th>

          </tr>
          "; //jalankan perintah inner join dari tabel keranjang dan produk
          try {
            $stmt ="SELECT * FROM transaksi, barang WHERE id_transaksi='$sid' AND transaksi.id_barang=barang.id_barang";
            foreach($db->query($stmt) as $row){
              $subtotal    = $row[harga_barang] * $row[jml_transaksi];
              $total       = $total + $subtotal;
              echo"<tr><td>$row[nama_barang]</td>
                  <td>$row[jml_transaksi]</td>
                  <td>$row[harga_barang]</td>
                  <td>$subtotal</td>
                  <td><a href='../controller/delete.con.php?id=$row[id_barang]'>Delete</a></td>
                  </tr>";
                  }
          } catch (PDOException $e) {
              echo "Error: " . $e->getMessage();
          }

// while($d=mysql_fetch_array($sql)){
//
//
// }
echo"</table>
<h2>Total Belanja : <b>$total</b></h2>
<ul>
<li><a href='barang.php'>Belanja Lagi</a></li>
<li><a href='../controller/logout.con.php'>Logout</a></li>
<li><a href='checkOut.php'>Selesai belanja</a></li>
</ul>";
?>
