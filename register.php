<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

	<link rel="stylesheet" href="./css/nav-include.css">
	<link rel="stylesheet" href="./css/register_styles.css">
 
</head>
<body>


<?php include './includes/nav-include.php'; ?>


<?php


if(isset($_POST["register"])){

	// get the values

	$uname = $_POST["username"];
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$cpass = $_POST["cpassword"];
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	
	// check if both passwords actually match

	if($pass != $cpass){

		echo "passwords do not match!";

	} else {

		// connect to the database
	include 'dbconfig.php';

		$sql = "insert into users (uname, email, pass, age, gender) values ('$uname', '$email', '$pass', '$age', '$gender');";

		$result = mysqli_query($conn, $sql);

		if(isset($result)){

		header("Location: login.php");

		}

		else {
			echo "Error entering record";
		}

		mysqli_close($conn);
	}

}



?>


<div class="register-wrapper">

<form method="POST">

<h2>User Registration</h2>
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" required>

	
	<label for="email">Email:</label>
	<input type="email" id="email" name="email" required>

	<label for="password">Password:</label>
	<input type="password" id="password" name="password" required>

	<label for="cpassword">Confirm Password:</label>
	<input type="password" id="cpassword" name="cpassword" required>


	<label for="age">Age:</label>
	<input type="number" id="age" name="age" min="18" max="100" required>

	<label for="gender">Gender:</label>
	<input type="radio" id="male" name="gender" value="male" required>

	<label for="male">Male</label>
	<input type="radio" id="female" name="gender" value="female" required>

	<label for="female">Female</label>
	<input type="radio" id="other" name="gender" value="other" required>
	<label for="other">Other</label>

	<input type="submit" name="register" value="Register">
	<input type="reset" value="Clear All">

	
</form>

<a href="login.php"><button>Login</button></a>
</div>


    
</body>
</html>