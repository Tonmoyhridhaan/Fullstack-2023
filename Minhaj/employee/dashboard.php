<?php
    session_start();
    //authentication
    if(!isset($_SESSION['user'])){
        header('Location: ../logout.php');
    }
    //Authorization
   if($_SESSION['user'] != 'employee'){
      header('Location: ../unauthorized.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="include/style.css">

    <title>Document</title>
</head>
    <body>

        <?php include 'navbar.php'; ?>

        <div id="wrapper" class="toggled">
            <div class="container-fluid">
                <!-- Sidebar -->

                <?php include 'sidebar.php'; ?>

                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            <br>
                            <h1>Your Title</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                Your Content
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->
                <h2>This is employee dashboard</h2>
            </div>
        </div>
        <!-- /#wrapper -->


        <script src="include/main.js"></script>

    </body>
</html>