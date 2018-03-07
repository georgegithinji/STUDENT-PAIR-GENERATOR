<?php  session_start();  ?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD:user.php
=======
<<<<<<< HEAD

>>>>>>> bbbc376cb0ddea8c8f3df7ec00912cfb049448cc:user.html
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/app.css" rel="stylesheet" type="text/css">

<<<<<<< HEAD
  <title></title>
=======
  <title>User user-page</title>
>>>>>>> ff9e24b89c5c72eef5755c1c206738b27b0ac3bc
</head>
<?php
      if(!isset($_SESSION['user']))
       {
           header("Location:index.php");
       }
?>
<body>
<div class="user-page">
  <main class="container user-side1">
    <h2>Today's Pairs</h2>
    <span class="window-list"></span>
    <form class="form-group form-list">
      <button type="submit" class="btn btn-lg window">Request Pair Switch</button>
=======
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
      <title></title>
  </head>
  <body>
    <div class="user-page">
      <main class="container user-side1">
        <h2>Today's Pairs</h2>
        <span class="window-list"></span>
        <form class="form-group form-list">
          <button type="submit" class="btn btn-lg window">Request Pair Switch</button>
>>>>>>> 16d97a32e79f8085e2867ff6259f86c7fa681e0b
      <button class="btn btn-lg window1">Save</button>
    </form>
  </main>
  <main class="container user-side2">
    <form class="form-group">
      <span>
      <input class="form-control search s-inline"placeholder="search">
      <button class="btn pull-right s-inline"><img src="images/search.png" width="20em" height="20em"></button>
    </span>
      <button class="btn " id="view-previous">VIEW PREVIOUS LIST</button>

    </form>
  </main>
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> ff9e24b89c5c72eef5755c1c206738b27b0ac3bc
</div>
</body>

=======
</div>

    <script type="text/javascript" href="js/jquery-3.3.1.js"></script>
  </body>
>>>>>>> 16d97a32e79f8085e2867ff6259f86c7fa681e0b
</html>
