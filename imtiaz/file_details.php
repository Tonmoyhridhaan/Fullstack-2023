<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>file details</title>
</head>
<body>
<div class="container">
  <h2>image Table</h2>          
  <table class="" style="width:100%" id="example">
    <thead>
      <tr>
        <th>Id</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
    <?php
            include 'connection.php';
            $sql = "SELECT * FROM images";
            $result = mysqli_query($con,$sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $image=$row['image'];
                $id= $row['id'];
                echo '<tr>
        
                <td>'.$id.'</td>
                <td> <img src='.$image.'> </td>
               
              </tr> ' ;
            }
        ?>
      
    </tbody>
</body>
</html>