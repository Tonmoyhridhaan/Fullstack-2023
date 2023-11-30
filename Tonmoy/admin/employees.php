<?php
    session_start();

    //authentication
    if(!isset($_SESSION['user'])){
        header('Location: ../logout.php');
    }

    //authorization (end to end verification)
    if($_SESSION['user'] != 'admin'){
        header('Location: ../unauthorised.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="include/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- Sidebar -->
            <?php include 'navbar.php'; ?>
        <!-- Navbar -->
    
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
        <h2>Employees Table</h2>
            <p>Full stack employees</p>  
            <table class="inputs">
                  <tbody>
                    <tr>
                      <td>Minimum age:</td>
                      <td><input type="text" id="min" name="min"></td>
                  </tr>
                  <tr>
                      <td>Maximum age:</td>
                      <td><input type="text" id="max" name="max"></td>
                  </tr>
              </tbody>
            </table>       
        <table class="display" style="width:100%" id="example">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>Contact</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                      include '../connection.php';
                      $sql = "SELECT * FROM employees";
                      $result = mysqli_query($con,$sql);
                      while ($row = mysqli_fetch_array($result)) {
                  ?>
                <tr>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><?php echo $row['contact']; ?></td>
                  <td><?php echo $row['location']; ?></td>
                  <td>
                      <button class="btn btn-warning">Edit</button>
                      <button class="btn btn-danger">Delete</button>
                  </td>
                
                </tr>
                <?php } ?>
                
              </tbody>
            </table>

        </div>
    </main>
    <!--Main layout-->
    <script src="include/main.js"></script>
          <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
          <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
          <script>
              const minEl = document.querySelector('#min');
              const maxEl = document.querySelector('#max');
              
              // Custom range filtering function
              DataTable.ext.search.push(function (settings, data, dataIndex) {
                  let min = parseInt(minEl.value, 10);
                  let max = parseInt(maxEl.value, 10);
                  let age = parseFloat(data[2]) || 0; // use data for the age column
              
                  if (
                      (isNaN(min) && isNaN(max)) ||
                      (isNaN(min) && age <= max) ||
                      (min <= age && isNaN(max)) ||
                      (min <= age && age <= max)
                  ) {
                      return true;
                  }
              
                  return false;
              });
              
              const table = new DataTable('#example');
              
              // Changes to the inputs will trigger a redraw to update the table
              minEl.addEventListener('input', function () {
                  table.draw();
              });
              maxEl.addEventListener('input', function () {
                  table.draw();
              });
          </script>

<script src="include/main.js"></script>
</body>
</html>