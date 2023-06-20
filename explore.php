<?php
session_start();

if(!isset($_SESSION["username"])){
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Fashion</title>
    <link rel="stylesheet" href="./css/nav-include.css">
    <link rel="stylesheet" href="./css/explore_styles.css">

  
</head>
<body>

<?php include './includes/nav-include.php'; ?>

<?php

$logged =  $_SESSION["username"];
 
 

?>

<h2 style="
 position: absolute;
 color: green;
 top: 100px;

"> Logged in as: <?php echo $logged ?></h2>

 <a href="cloth_items.php">
 <div class="card casual">
    <img src="./includes/images/C.jpg" alt="Casual Clothes">
    <h2>View Clothing</h2>
    <p>Find your perfect outfit for a day out with friends</p>
  </div>
 </a>
  
 <a href="outfithistory.php">
 <div class="card formal">
    <img src="./includes/images/F.jpg" alt="Formal Clothes">
    <h2>My History</h2>
    <p>Get dressed up for a special occasion</p>
  </div>
 </a>
  
 <a href="stylestrends.php">
 <div class="card sports">
    <img src="./includes/images/S.jpg" alt="Sports Clothes">
    <h2>Style & Trends</h2>
    <p>Stay comfortable and stylish during your workout</p>
  </div>
 </a>
  
 

  <script>

const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  card.addEventListener('click', () => {
    // Do something when the card is clicked


  });
});


  </script>
 
 
    
</body>
</html>