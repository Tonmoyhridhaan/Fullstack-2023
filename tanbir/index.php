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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>Login Page</h2>
  <p>Enter Your email and password to login</p>
  <div class="card" style="width:500px">
    <form method="post" class="pl-5 pr-5 pb-5 pt-5">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" onkeyup="checkEmail()" name="email">
            <span class="text-danger" id="email-danger-span"></span>
            <span class="text-success" id="email-success-span"></span>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" onkeyup="displayPassword()" name="pswd">
            <span class="text-danger" id="password-danger-span"></span>
            <span class="text-warning" id="password-warning-span"></span>
            <span class="text-success" id="password-success-span"></span>
        </div>
        
        <button type="submit" name="submit" id="button" value="submit" class="btn btn-primary">Login</button>
    </form>
    <?php
        include 'connection.php';
        if($_POST['submit']){
            $email = $_POST['email'];
            $pswd = $_POST['pswd'];
            
            $query = "SELECT * FROM admins WHERE email='$email' AND password='$pswd' ";
            $result = mysqli_query($con,$query);
            $admin = mysqli_fetch_array($result);

            $query = "SELECT * FROM employees WHERE email='$email' AND password='$pswd' ";
            $result = mysqli_query($con,$query);
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
<script>
        var button = document.getElementById("button");
        button.disabled = true;
        
           function checkEmail(){

            var email = document.getElementById("email").value;
            valids = ["gmail.com", "yahoo.com", "outlook.com"]
            if(email.indexOf('@') != -1 ){
              var domain = email.split('@')[1];
              for(let i=0; i<valids.length; i++){
                if(domain == valids[i]){
                  document.getElementById("email-success-span").innerHTML = "valid email";
                  document.getElementById("email-danger-span").innerHTML = "";
                  button.disabled = false;
                  break;
                
                }
                else{
                  document.getElementById("email-success-span").innerHTML = "";
                  document.getElementById("email-danger-span").innerHTML = "invalid email";
                  button.disabled = true;
                }

              }
              
            }
            else{
              document.getElementById("email-success-span").innerHTML = "";
                document.getElementById("email-danger-span").innerHTML = "";
                button.disabled = true;
            }
 
        }
        function displayPassword(){
            var pass = document.getElementById("pwd").value;
            //alert(email.value);
            
            if(pass.length<6){
                document.getElementById("password-danger-span").innerHTML = "Your password must be 6 character long";
                document.getElementById("password-warning-span").innerHTML = "";
                document.getElementById("password-success-span").innerHTML = "";
                button.disabled = true;

            }
            else if(pass.length<8){
                document.getElementById("password-warning-span").innerHTML = "Your password is poor";
                document.getElementById("password-danger-span").innerHTML = "";
                document.getElementById("password-success-span").innerHTML = "";
                button.disabled = true;
                
            }
            else{
                document.getElementById("password-success-span").innerHTML = "Your password is secure";
                document.getElementById("password-danger-span").innerHTML = "";
                document.getElementById("password-warning-span").innerHTML = "";
                button.disabled = false;
            }
            
        }
      
    </script>
</body>
</html>
