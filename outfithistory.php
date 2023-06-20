<?php
session_start();

if(!isset($_SESSION["username"])){
  header("Location: login.php");
}

$logged = $_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing</title>
    <link rel="stylesheet" href="./css/nav-include.css">
    <link rel="stylesheet" href="./css/history_styles.css">

    <style>


	 
    </style>
</head>
<body>

<?php include './includes/nav-include.php'; ?>


<h2 style="
    position: absolute;
 color: green;
 top: 100px;
 font-size: 20px;
 margin-bottom: 50px;

">Logged in as: <?php echo $logged?></h2>

<div class="outfit-history">
  <h2 id="justh2" style="color: green;">Outfit History</h2>
  <div class="grid">
    <div class="item">
      <img src="./includes/images/bluesuit.jpg" alt="Outfit item">
      <h3>Date: 01/01/2022</h3>
      <p>This timeless blue suit is perfect for any formal occasion</p>
    </div>
    <div class="item">
      <img src="./includes/images/womenoutfit.jpeg" alt="Outfit item">
      <h3>Date: 02/15/2022</h3>
      <p>Outfit description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere suscipit nisl, sit amet finibus sapien hendrerit eu.</p>
    </div>
    <div class="item">
      <img src="./includes/images/maleoutfit.jpeg" alt="Outfit item">
      <h3>Date: 03/20/2022</h3>
      <p>Outfit description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere suscipit nisl, sit amet finibus sapien hendrerit eu.</p>
    </div>
  </div>
</div>
    
</body>
</html>