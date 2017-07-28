
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="col-md-9">
        <form action="../controller/ubahProfile.con.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">username </label>
            <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Email"value="<php ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-default">Ubah Data</button>
        </form>
      </div>
    </div>
  </body>
</html>
