<?php
//define('__ROOT__', dirname(dirname(__FILE__)));
error_reporting(E_ALL|E_STRICT);
require('conn.php');
$con = mysqli_connect($host, $user, $pass,$name);
if (isset($_POST["admin-login"])){
$username = $_POST["admin-username"];
$password = $_POST["admin-password"];


$check_username = "SELECT username FROM admin WHERE username='$username'";
$check =  mysqli_query($con, $check_username);

if(mysqli_num_rows($check)){
//echo"<script>alert('');</script>";
//$insert_user = "INSERT INTO users(id,name,username,password) VALUE('','$name','$username','$password')";
echo"<script>alert('user found');</script>";

}else{
//echo "false";
echo"<script>alert('user not found');</script>";
//  exit();
}
}
?>
