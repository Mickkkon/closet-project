
<?php 

session_start();


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
    <title>Closet</title>
    <!-- <link rel="stylesheet" href="./includes/nav-include.css"> -->
    <link rel="stylesheet" href="./css/index_styles.css">


    <!-- for login -->
    <!-- <link rel="stylesheet" href="./css/login_styles.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  
</head>

<body>

<div class="container">
    <h2 id="myheading">Your Closet </h2>
   <button id="unlock-btn" type="button" onclick="showLogin();">Unlock</button> 

  
    <div class="inner-div">

        <div class="circle-wrapper">

            <div class="thecircle">

                <div class="inner1"></div>
                
            </div>

        </div>

    </div>
</div>

 <!-- Login code -->
 
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

    echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Incorrect username or password',
              showConfirmButton: false,
              timer: 2000
            });
          </script>";

}


}

?>
 
<div class="login-wrapper">

<form method="POST"> 

<div class="form-header">
    <h2>Login</h2>
    <span id="myspan"><i class="fa fa-window-close" aria-hidden="true"></i></span>
    
</div>


	<label for="username">Username:</label>
	<input type="text" id="username" name="username" required>


	<label for="password">Password:</label>
	<input type="password" id="password" name="password" autocomplete="none" required>
	
	<input type="submit" name="login" value="Login">
	<input type="reset" value="Clear All">
    
	<a href="register.php"><button type="button" id="redir-btn">Register</button></a>

</form>


</div>

 

<script src="./js/index-page.js"></script>
    
</body>
</html>