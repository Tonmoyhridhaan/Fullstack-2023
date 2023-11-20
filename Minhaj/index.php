<?php include 'connection.php'; 
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<section class="h-100">
		<div class="container h-100">		  
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
				  <form action="" method="post">
					<div class="text-center my-5">
						<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input type="text" name="email" class="form-control" id="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
									</div>
									<input type="password" name="password" class="form-control" id="" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>
								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" name="loginBtn" class="btn btn-primary ms-auto" >
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="registration.php" class="text-dark">Create</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/login.js"></script>
</body>
</html>
<?php 
    if(isset($_POST['loginBtn'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $s = "select * from department_admins where email='".$email."' 
        and password='".$password."'";
        $q = mysqli_query($conn, $s);
        if($r=mysqli_fetch_assoc($q)){
            $status = $r['status'];
            if($status){
                // save user data into session
                $_SESSION['user_name'] = $r['name'];
                $_SESSION['user_role'] = $r['role'];
              
                if( $_SESSION['user_role']==$r['role']){
                    header('Location: dashboard.php');
                }
            }
            else{
                echo 'Not Approved';
            }
        }
    }
