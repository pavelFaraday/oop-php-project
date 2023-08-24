<!DOCTYPE html>
<html lang="en">

<?php

if (isset($_POST["submit"])) {
    /*     
    echo "<pre>";
    print_r($_FILES["file_upload"]);
    echo "<pre>"; 
    */

    // access uploaded file data
    $temp_name = $_FILES["file_upload"]["tmp_name"];
    $the_file = $_FILES["file_upload"]["name"];
    $directory = "uploads";
    $the_message = "";
    if (move_uploaded_file($temp_name, $directory . "/" . $the_file)) {
        $the_message =  "file uploaded successfully";
    }
} else {
    $the_message = "";
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <h2>
            <?php
            echo $the_message;
            ?>
        </h2>
        <input type="file" name="file_upload"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>