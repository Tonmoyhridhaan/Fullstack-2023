<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<body>
<div class="container">
  <h2>Employees Table</h2>
  <p>Full stack employees</p>           
  <table class="display" style="width:100%" id="example">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
            include '../connection.php';
            $sql = "SELECT * FROM employee";
            $result = mysqli_query($con,$sql);
            while ($row = mysqli_fetch_array($result)) {
        ?>
      <tr>
        
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['salary']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td>
             <a class="btn btn-secondary" href="edit.php?id=<?php echo $row['id'] ?>" >Edit</a>
            <button class="btn btn-danger">Delete</button>
        </td>
       
      </tr> 
      <?php } ?>
      
    </tbody>
</body>
</html>