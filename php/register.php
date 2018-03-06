<?php
//define('__ROOT__', dirname(dirname(__FILE__)));
error_reporting(E_ALL|E_STRICT);
require('conn.php');
$con = mysqli_connect($host, $user, $pass,$name);
if (isset($_POST["signup"])){
$name = $_POST["user"];
$username = $_POST["username"];
$password = $_POST["password"];

if(empty($name)){
exit();
}
if(empty($username)){
exit();
}

if(empty($password)){
  exit();
}

$check_username = "SELECT * FROM users WHERE username='$username'";
$check =  mysqli_query($con, $check_username);

if(mysqli_num_rows($check)){
  echo"<script>alert('user exist');</script>";
  exit();
}else{
  $insert_user = "INSERT INTO users(id,name,username,password) VALUE('','$name','$username','$password')";
  if(mysqli_query($con,$insert_user)){
echo"<script>alert('good');</script>";
  }
}
}


 ?>
