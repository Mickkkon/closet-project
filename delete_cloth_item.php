<?php


// Connect to the database
include 'dbconfig.php';

// Check if ID parameter is set
if (isset($_GET['id'])) {
  // Get the ID from the query parameter
  $id = $_GET['id'];

  // SQL query to delete the item with the given ID
  $sql = "DELETE FROM clothes WHERE id='$id'";

  // Execute the query
  if (mysqli_query($conn, $sql)) {
    // Item deleted successfully, redirect to the main page
    header("Location: cloth_items.php");
    exit;
  } else {
    // Error deleting item from database
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);

?>