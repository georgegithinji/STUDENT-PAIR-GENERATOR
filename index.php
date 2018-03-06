<?php  session_start(); ?>
<?php
error_reporting(E_ALL|E_STRICT);
if(isset($_SESSION['user']))
 {
    header("Location:user.php");
 }
require('conn.php');
$con = mysqli_connect($host, $user, $pass,$name);
$name_error=$username_error=$password_error="";
function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if (isset($_POST["signup"])){
$name = test_input($_POST["user"]);
$username = test_input($_POST["username"]);
$password = test_input($_POST["password"]);
$pass = password_hash($password, PASSWORD_BCRYPT);
if(empty($name)){
$name_error = "Please enter your name";
}
if(empty($username)){
$username_error = "Please enter your a username";
}

if(empty($password)){
  $password_error = "Please enter password";
}

$check_username = "SELECT username FROM users WHERE username='$username'";
$check =  mysqli_query($con, $check_username);

if(mysqli_num_rows($check)){
  $name_error = "Username already exists";
  exit();
}else{
  $insert_user = "INSERT INTO users(id,name,username,password) VALUE('','$name','$username','$pass')";
  if(mysqli_query($con,$insert_user)){
    echo"<script>alert('good');</script>";
  $_SESSION['user']=$username;
  }
  header("Location:index.php");
}
}

if (isset($_POST["user-login"])){
$username = test_input($_POST["user-username"]);
$password = test_input($_POST["user-password"]);
$pass = password_hash($password, PASSWORD_BCRYPT);

if(empty($username)){
$name_error = "Please enter your username";
}
if(empty($password)){
$username_error = "Please enter your password";
}
//$truePassword = password_verify($password, $retrieved_pass);
$check_username = "SELECT username FROM users WHERE username='$username' AND password='$password'";
$check =  mysqli_query($con, $check_username);


if(mysqli_num_rows($check)){
echo"<script>alert('user found');</script>";

          $_SESSION['user']=$user;
}else{
//echo "false";
echo"<script>alert('user not found');</script>";
//  exit();
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
  <div class="caption">Sign up or login to find a pair!!</div>
  <div class="main-user">
    <main class="container sign-up">
      <h2>SIGN UP</h2>
      <hr>
      <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
      <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
