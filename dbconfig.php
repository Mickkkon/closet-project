<?php

$conn = mysqli_connect("localhost", "root", "", "closet");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>