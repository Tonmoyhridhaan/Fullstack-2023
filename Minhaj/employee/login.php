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
    <p>Enter Your email and password to login</p>
    <div class="card" style="width:500px">
        <form method="post" class="pl-5 pr-5 pb-5 pt-5">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
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