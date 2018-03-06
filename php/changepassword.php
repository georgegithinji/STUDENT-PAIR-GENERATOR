<?php
//define('__ROOT__', dirname(dirname(__FILE__)));
error_reporting(E_ALL|E_STRICT);
require('conn.php');
$con = mysqli_connect($host, $user, $pass,$name);
if (isset($_POST["signup"])){
$name = $_POST["user"];
$username = $_POST["username"];
$password = $_POST["password"];





?>
