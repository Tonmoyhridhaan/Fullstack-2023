
<?php
 session_start();
 if(isset($_SESSION['user'])){
    if($_SESSION['user']=='admin'){
        header('Location: admin/dashboard.php');
    }
    else if($_SESSION['user']=='employee'){
        header('Location: employee/dashboard.php');
    
 }
 }
?>

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
    <?php
     include 'connection.php';
  
            if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $pswd = $_POST['pswd'];
            
            $query = "SELECT * FROM admins WHERE email='$email' AND password='$pswd' ";
            $result = mysqli_query($conn,$query);
            $admin = mysqli_fetch_array($result);

            $query = "SELECT * FROM employees WHERE email='$email' AND password='$pswd' ";
            $result = mysqli_query($conn,$query);
            $employee = mysqli_fetch_array($result);

            if($admin){
                $_SESSION['user'] = 'admin';
                $_SESSION['id'] = $admin['id'];
                header("Location: admin/dashboard.php");
            }
            else if($employee){
                $_SESSION['user'] = 'employee';
                $_SESSION['id'] = $employee['id'];
                header("Location: employee/dashboard.php");
            }
            else{
                echo "<span class='text-center text-danger' >Invalid Email or Password!</span>";
            }


        }

    ?>
  </div>
  <br>
  
  
  
</div>

</body>
</html>
