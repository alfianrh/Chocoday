<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADMIN | CHOCODAY</title>
  </head>
  <body>
    <h1>MASUK SEBAGAI ADMIN</h1>
    <form action="../controller/login/loginAdmin.con.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Username </label>
        <input type="text" class="form-control" name="txtUsernameAdmin" id="txtUsernameAdmin" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="txtPasswordAdmin" id="txtPasswordAdmin" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-default">Submit</button>
  </body>
</html>
