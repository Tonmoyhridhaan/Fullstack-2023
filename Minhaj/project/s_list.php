<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
    <!-- theme meta -->
    <meta name="theme-name" content="sleek" />
    <title>University</title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <!-- No Extra plugin used -->
    <link href='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    <link href='assets/plugins/toastr/toastr.min.css' rel='stylesheet'>
    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/plugins/nprogress/nprogress.js"></script>
    
  </head>
  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">



    <!-- ===================WRAPPER============ -->
    <div class="wrapper">
      <!-- Github Link -->

      <?php include 'sidebar.php'; ?>
      <?php include 'navbar.php'; ?>

                <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->

      <div class="content-wrapper">
            <div class="content">
            <?php
    include 'conn.php';
?>

            <h4>All Student List</h4>
            <table id="example" class="table table-striped">
                <thead>
                    <th> ID </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php 
                        $s = "select * from puc_login group by name having role='Student' and status=1 and department='CSE'";
                        $q = mysqli_query($conn, $s);
                        while($r = mysqli_fetch_array($q)){ ?>
                            <tr>
                                <td><?php echo $r['id'] ?></td>
                                <td><?php echo $r['name'] ?></td>
                                <td><?php echo $r['email'] ?></td>
                                <td><?php echo $r['department'] ?></td>    
                                <td>
                                    <a href="#.php?id=<?php echo $r['id'] ?>" class="btn btn-secondary">Edit</a>
                                </td>
                                <td>
                                    <a href="#.php?id=<?php echo $r['id'] ?>" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        <?php  }
                    ?>
                </tbody>
            </table>




    </div>
      </div>

    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';
      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->
    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src='assets/plugins/charts/Chart.min.js'></script>
    <script src='assets/js/chart.js'></script>
    <script src='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='assets/js/vector-map.js'></script>
    <script src='assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='assets/js/date-range.js'></script>
    <script src="assets/js/sleek.js"></script>
    <link href="assets/options/optionswitch.css" rel="stylesheet">
    <script src="assets/options/optionswitcher.js"></script>
    <script  src="https://code.jquery.com/jquery-3.7.0.js"></script>
            <script  src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
            <script>  new DataTable('#example');  </script>
</body>
</html>