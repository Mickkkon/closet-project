<?php
session_start();


// the user is not allowed to return to the login page just after a 
//  successful login unless they sign out. 
if(isset($_SESSION["username"])){
	header("Location: explore.php");
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/nav-include.css">
	<link rel="stylesheet" href="./css/login_styles.css">
 

</head>

<body>

<?php include './includes/nav-include.php'; ?>

<?php


if(isset($_POST["login"])){
    // get values

    $uname = $_POST["username"];
    $pass = $_POST["password"];

// create database connection

include 'dbconfig.php';

// sql statement

$sql = "select * from users where (uname = '$uname' and pass = '$pass')";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res) > 0 ){

  // Successful login
  $_SESSION["username"] = $uname;
  header("Location: explore.php");
  exit();

} else {


    echo "wrong Credentials";


}


}



?>

<div class="login-wrapper">

<form method="POST">

<h2>Login</h2>

	<label for="username">Username:</label>
	<input type="text" id="username" name="username" required>


	<label for="password">Password:</label>
	<input type="password" id="password" name="password" required>
	
	<input type="submit" name="login" value="Login">
	<input type="reset" value="Clear All">

</form>

	<a href="register.php"><button>Register</button></a>

</div>

</body>
</html>