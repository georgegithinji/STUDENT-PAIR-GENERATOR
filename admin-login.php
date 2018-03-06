<?php  session_start(); ?>
<?php
error_reporting(E_ALL|E_STRICT);
if(isset($_SESSION['userAdmin']))
 {
    header("Location:admin-dashboard.php");
 }
require('conn.php');
$con = mysqli_connect($host, $user, $pass,$name);
$name_error=$overall_error=$password_error="";
function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if (isset($_POST["admin-login"])){
$username = test_input($_POST["admin-username"]);
$password = $_POST["admin-password"];


$check_username = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$check =  mysqli_query($con, $check_username);

if(mysqli_num_rows($check)){
echo"<script>alert('user found');</script>";
$_SESSION['userAdmin']=$username;
  header("Location:admin-dashboard.php");
}else{
$overall_error = "Wrong username/password combination";
  header("Location:admin-login.php");
echo"<script>alert('user not found');</script>";
 exit();
}
}
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
  </body>

  <main class="container admin">
     <h2>ADMIN LOGIN</h2>
      <h2>LOGIN</h2>
      <hr>
      <form class="form-group" action="admin-login.php" method="post">
        <label>USERNAME</label>
        <input type="text" placeholder="username" class="form-control" name="admin-username">
        <label id="pas">PASSWORD</label>
        <input type="password" class="form-control" name="admin-password">
        <button class="btn  btn-lg center-block" name="admin-login">login</button>
      </form>
  </main>

</html>
