<?php 
    include 'connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Register Here</h2>
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Users</a>
                        </li>
                        </ul>
                        <form class="d-flex">
                            <a href="logout.php" class="btn btn-danger">Logout</a>
                        </form>
                    </div>
                </nav>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Department</label>
                <input type="department" name="department" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" name="cnf_password" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Role</label>
                <input type="role" name="role" class="form-control" id="">
            </div>
            <div class="form-group my-3">
                <button type="submit" class="btn btn-primary" name="submitBtn">Save</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php 
    if(isset($_POST['submitBtn'])){
        $teacher_name = $_POST["name"];
        $teacher_email = $_POST["email"];
        $s_department = $_POST["department"];
        $password = $_POST["password"];
        $cnf_password = $_POST["cnf_password"];
        $role = $_POST["role"];

        if($password == $cnf_password){
            $str = "INSERT INTO department_admins(name, email, department, password, role)
            VALUES 
            ('".$teacher_name."', '".$teacher_email."', 
            '".$s_department."', '".md5($password)."', '".$role."')";
            if(mysqli_query($conn, $str)){
                header('Location: dashboard.php');
            }
        }
        else {
            echo 'Password Mismatch';
        }

        
    }

?>