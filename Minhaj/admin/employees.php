<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>Employees Table</h2>
  <p>Full stack employees</p>  
  <table class="inputs">
        <tbody><tr>
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
            $result = mysqli_query($conn,$sql);
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
</body>
</html>