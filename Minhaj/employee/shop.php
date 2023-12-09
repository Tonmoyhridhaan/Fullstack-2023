<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
    <body>
    
    <div class="container">
    <h2>Login Page</h2>
    <p>ONline Shop</p>
    <div class="card" style="width:500px">
        <form method="post" class="pl-5 pr-5 pb-5 pt-5">
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="name">
            </div>
            <div class="form-group">
                <label for="email">price:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="price">
            </div>
            <div class="form-group">
                <label for="email">Quantity:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="quantity">
            </div>
            <div class="form-group">
                <label for="email">Catagory:</label>
               
                <select class="form-control" id="sel1" name = "category">
                    <?php
                        include '../connection.php';
                        $query = "SELECT * FROM catagories";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){


                    ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                    
                    <?php
                        }
                    ?>
                </select>
            </div>
            
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Login</button>
        </form>
    </body>
</html>
<?php 
include '../connection.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    
    $query = "SELECT * FROM admins WHERE email='$email' AND password='$pswd' ";
    echo $query;
    $result = mysqli_query($conn,$query);
    $admin = mysqli_num_rows($result);
    if ($admin>0){ 
        echo "succesfully login";
    }
}
?>
