<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Select a file:</label>
        <input type="file" name="file" id="file">
        <br>
        <input type="submit" value="Upload">
    </form>
    <?php
        //print_r($_FILES["file"]);
        $filename = $_FILES["file"]["name"];
        $tempfile = $_FILES["file"]["tmp_name"];
        $folder = "Images/" . $filename;
        echo "<img src=' $folder' height='100px' width='100px'>";
        move_uploaded_file($filename,$folder);
    ?>
</body>
</html>