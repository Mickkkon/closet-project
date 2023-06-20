
<?php 

session_start();


if(isset($_SESSION["username"])){
	header("Location: explore.php");

	// "<script>
	// prompt(\"You are already logged in\");
	
	// </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closet</title>
    <link rel="stylesheet" href="./includes/nav-include.css">
    <link rel="stylesheet" href="./css/index_styles.css">

</head>

<body>

<div class="container">
    <h2>Your Closet </h2>
    <a href="login.php"><button>Unlock</button></button></a>

  
    <div class="inner-div">

        <div class="circle-wrapper">

            <div class="thecircle">

                <div class="inner1"></div>
                
            </div>

        </div>

    </div>
</div>
    
</body>
</html>