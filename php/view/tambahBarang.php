<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TAMBAH BARANG | CHOCODAY</title>
  </head>
  <body>
    <form action="../controller/tambahBarang.con.php" method="post">
      <div class="form-group">
        <label >Nama Barang </label>
        <input type="text" class="form-control" name="txtNamaBarang" id="txtNamaBarang" placeholder="Nama">
      </div>
      <div class="form-group">
        <label >Harga Barang </label>
        <input type="text" class="form-control" name="txtHargaBarang" id="txtHargaBarang" placeholder="Harga">
      </div>
      <div class="form-group">
        <label >Jumlah Barang </label>
        <input type="text" class="form-control" name="jmlBarang" id="jmlBarang" placeholder="Jumlah barang yang tersedia">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
  </body>
</html>
