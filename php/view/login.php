<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIGN IN | CHOCODAY</title>
  </head>
  <body>
    <h1>MASUK SEBAGAI USER</h1>
    <form action="../controller/login/login.con.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Username </label>
        <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-default">Submit</button>
      belum punya akun?<a href="regristasi.php">daftar disini</a>
  </body>
</html>
