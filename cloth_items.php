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
    <title>Add Clothing</title>
    <link rel="stylesheet" href="./css/nav-include.css">
    <link rel="stylesheet" href="./css/addclothing_styles.css">
    

    <style>
          
   
    </style>
    
</head>

<body>

<button id="form-btn" type="button" onclick="showForm();">Add Clothing</button>

<?php include './includes/nav-include.php'; ?>

<h2 style="
   position: absolute;
 color: green;
 top: 85px;
">Logged in as: <?php echo $logged ?></h2>

<!-- php to handle the form data -->

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  
// the js script sets the form pop up display back to none
   "<script> 
   document.getElementByID(\"myform\").style.display = \"none\";
   </script>";

// create connection to the database

include 'dbconfig.php';

  // Get form data
  $item_name = $_POST["item_name"];
  $item_type = $_POST["item_type"];
  $item_brand = $_POST["item_brand"];
  $item_image = $_FILES["file"]["name"];

  // Define target directory where image will be uploaded
  $target_dir = "./uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    // File is an image
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
      // Image uploaded successfully, insert data into database
      $sql = "INSERT INTO clothes (item_name, item_type, item_brand, item_image)
              VALUES ('$item_name', '$item_type', '$item_brand', '$item_image')";

      if ($conn->query($sql) === TRUE) {
        // Data inserted successfully, redirect to success page

         
        header("Location:cloth_items.php");
        exit;
      } else {
        // Error inserting data into database
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    } else {
      // Error uploading image file
      echo "Sorry, there was an error uploading your file.";
    }
  } else {
    // File is not an image
    echo "File is not an image.";
  }

  // Close database connection
  $conn->close();
}
?>

<div class="form-wrapper">

       
<form id="myform" class="form-container" method="POST" enctype="multipart/form-data">
<button  id="back-btn" type="button">x</button>

  <h2>Add New Clothing Items</h2><hr><br>
  <div class="form-group">
    <label for="item_name">Cloth Name</label>
    <input type="text" id="item_name" name="item_name" required>
  </div>
  <div class="form-group">
    <label for="item_type">Cloth Type</label>
    <select id="item_type" name="item_type" required>
      <option value="sports">Sports</option>
      <option value="formal">Formal</option>
      <option value="casual">Casual</option>
    </select>
  </div>
  <div class="form-group">
    <label for="item_brand">Brand</label>
    <select id="item_brand" name="item_brand" required>
      <option value="Adidas">Adidas</option>
      <option value="Nike">Nike</option>
      <option value="Levi's">Levi's</option>
      <option value="Calvin Klein">Calvin Klein</option>
      <option value="Zara">Zara</option>
      <option value="H&M">H&M</option>
      <option value="Forever 21">Forever 21</option>
      <option value="Mituma">Mitumba</option>
      <option value="brand6">Generic</option>
    </select>
  </div>
  <div class="form-group">
    <label for="item_image">Cloth Image</label>
    <input type="file" id="item_image" name="file" required>
  </div>
  <div class="form-group">
    <button id="add-clothing-btn" type="submit">Add</button>

  </div>
</form>
</div>



<div class="placeholder-div"><h2 style="margin-top: 10px;text-align: center;">My Clothing</h2></div>



<?php
// Connect to the database
 include 'dbconfig.php';



// SQL query to fetch all items from the clothes table
$sql = "SELECT * FROM clothes";
$result = mysqli_query($conn, $sql);

// Create HTML cards for each item
// Create HTML cards for each item
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo '<div class="card">';
    echo '<img src="./uploads/'.$row['item_image'].'" alt="'.$row['item_name'].'">';
    echo '<div class="card-info">';
    echo '<h2 style="color: #30336b;">'.$row['item_name'].'</h2>';
    echo '<p>'.$row['item_type'].'</p>';
    echo '<p>'.$row['item_brand'].'</p>';
    // Add a link wrapped button for deleting the item
    echo '<a href="delete_cloth_item.php?id='.$row['id'].'"><button>Delete</button></a>';
    echo '</div></div>';
  }
} else {
  echo "<h2 style='margin-left: 20px; color: green;'>Add clothing items to your closet</h2>";
}


// Close the database connection
mysqli_close($conn);
?>

 
 
 
<script defer src="./js/add_clothing.js"></script>
</body>
</html>