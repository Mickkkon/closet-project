<?php
if(isset($_POST['submit'])){

    $file = $_FILES['file'];

    $filename = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];


    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    $allow = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){

        if($fileError === 0){

            if($fileSize < 1000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExte;
                    $fileDestination = './uploads/' .$fileNameNew;
                    move_uploaded_file($fileTmpName);
            } else {
                echo "Your file is too large!";
            }

        } else {
            echo "There was an error uploading your file!";
        }

    } else {
        echo "You cannot upload files of this type";
    }
}

?>