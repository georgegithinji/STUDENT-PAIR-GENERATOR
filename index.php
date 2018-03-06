<?php
error_reporting(E_ALL|E_STRICT);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/app.css" rel="stylesheet" type="text/css">

  <title></title>
</head>

<body>
  <div class="caption">Sign up or login to find a pair!!</div>
  <div class="main-user">
    <main class="container sign-up">
      <h2>SIGN UP</h2>
      <hr>
      <form class="form-group" action="./php/register.php" method="post">
        <label>NAME</label>
        <input type="text" placeholder="enter your name" class="form-control" name="user">
        <label id="user-0">USERNAME</label>
        <input type="text" placeholder="enter a username" class="form-control" name="username">
        <label id="pass-0">PASSWORD</label>
        <input type="password" class="form-control" name="password">
      <button class="btn btn-lg center-block" name="signup">SIGN UP</button>
    </form>
    </main>
    <main class="container login">
      <h2>LOGIN</h2>
      <hr>
      <form class="form-group" action="./php/userlogin.php" method="post">
        <label>USERNAME</label>
        <input type="text" placeholder="enter your name" class="form-control" name="user-username">
        <label id="pass">PASSWORD</label>
        <input type="password" name="user-password" class="form-control">
        <button class="btn btn-lg center-block" name="user-login">login</button>
      </form>
    </main>
  </div>
</body>

</html>
