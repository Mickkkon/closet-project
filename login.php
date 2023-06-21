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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


 

</head>

<body>

<?php include './includes/nav-include.php'; ?>




<script src="./js/login.js"></script>

</body>
</html>