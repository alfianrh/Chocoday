
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIGN UP</title>
    <!-- <link rel="stylesheet" href="../../css/bootstrap.css"> -->
  </head>
  <body>
    <h1>MENU REGRISTASI</h1>
    <form action="../controller/regristasi.con.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Email </label>
        <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </body>
</html>
