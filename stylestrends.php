
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
    <title>Trends</title>
    <link rel="stylesheet" href="./css/nav-include.css">
    <link rel="stylesheet" href="./css/trends_styles.css">

    <style>
   

 
</style>
    
</head>

<body>

<?php include './includes/nav-include.php'; 

$logged = $_SESSION["username"];

?>
 
<!-- <div class="container"> -->

<h2 style="
font-size: 22px;
 position: absolute;
 color: green;
 top: 70px;
 left: 20px;

"> Logged in as: <?php echo $logged ?></h2>

<div class="section">
    <h2>Streetwear</h2>
    <div class="grid">
      <div class="item">
        <img src="./includes/stylesimages/street1.jpg" alt="Streetwear item">
        <h3>Item Name</h3>
        <p> The distressed detailing adds a worn-in, vintage feel to the jacket. Pair it with your favorite jeans and boots for a timeless, rugged look.</p>
      </div>
      <div class="item">
        <img src="./includes/stylesimages/street2.jpg" alt="Streetwear item">
        <h3>Item Name</h3>
        <p>Item description</p>
      </div>
      <div class="item">
        <img src="./includes/stylesimages/street3.jpg" alt="Streetwear item">
        <h3>Item Name</h3>
        <p>Item description</p>
      </div>
    </div>
  </div>
  
  <div class="section">
    <h2>Vintage</h2>
    <div class="grid">
      <div class="item">
        <img src="./includes/stylesimages/vin1.jpg" alt="Vintage item">
        <h3>Item Name</h3>
        <p>Item description</p>
      </div>
      <div class="item">
        <img src="./includes/stylesimages/vin2.jpg" alt="Vintage item">
        <h3>Item Name</h3>
        <p>Item description</p>
      </div>
      <div class="item">
        <img src="./includes/stylesimages/vin5.jpg" alt="Vintage item">
        <h3>Item Name</h3>
        <p>Item description</p>
      </div>
    </div>
  </div>
  
  <div class="section">
    <h2>Formal outfits</h2>
    <div class="grid">
      <div class="item">
        <img src="./includes/stylesimages/official1.jpg" alt="Minimalism item">
        <h3>Item Name</h3>
        <p>Item description</p>
      </div>
      <div class="item">
        <img src="./includes/stylesimages/official2.jpg" alt="Minimalism item">
        <h3>Item Name</h3>
        <p>Item description</p>
      </div>
      <div class="item">
        <img src="./includes/stylesimages/official3.jpg" alt="Minimalism item">
        <h3>Item Name</h3>
        <p>Item description</p>
      </div>
    </div>
  </div>
  
<!-- 
</div> -->

 
 
    
</body>
</html>



 