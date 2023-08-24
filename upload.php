<!DOCTYPE html>
<html lang="en">

<?php
// $_FILES is a PHP superglobal variable that is used to retrieve information about uploaded files in a web application. When a user submits a form that includes a file upload input field, the data about the uploaded file is made available in the $_FILES array. This array contains several pieces of information about the uploaded file, including its name, type, temporary location, error status, and size.
echo "<pre>";
print_r($_FILES["file_upload"]);
echo "<pre>";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <input type="file" name="file_upload"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>