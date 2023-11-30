<?php
    session_start();

    //authentication
    if(!isset($_SESSION['user'])){
        header('Location: ../logout.php');
    }

    //Authorization
    if($_SESSION['user'] != 'admin'){
        header('Location: ../unauthorized.php');
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is admin dashboard</h2>
    <h2><a href="employees.php">Employee List </h2>
    <a href="../logout.php"> Logout

</body>
</html>