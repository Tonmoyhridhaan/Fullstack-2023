<?php include 'connection.php'; ?>
<?php 
    $t_id = $_REQUEST['tId'];
    $s = "Select * from department_admins where id=".$t_id;
    $str = "SELECT name FROM departments";
    $q = mysqli_query($conn, $s);
    $r = mysqli_fetch_assoc($q);
    $q = mysqli_query($conn, $str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Edit Users</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $r['name'] ?>" id="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $r['email'] ?>" id="">
            </div>
            <div class="form-group">
                <label for="">Department</label>
                <select name="department" id="" class="form-control">
                    <option value="">Select Department</option>
                    <?php while ($row = $q->fetch_assoc()) { ?>
                        <option><?php echo $row['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Role</label>
                <select name="role" id="" class="form-control">
                    <option value="">Select Role</option>
                    <?php while ($row = $q->fetch_assoc()) { ?>
                        <option><?php echo $row['role']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary" name="submitBtn">Update</button>
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
        $teacher_role = $_POST["role"];

        $str = "UPDATE department_admins SET name='".$teacher_name."', 
                    email='".$teacher_email."', 
                    department='".$s_department."',
                    role='".$teacher_role."' 
                    WHERE id=$r[id]";

        if(mysqli_query($conn, $str)){
            header('Location: dashboard.php');
        }
    }

?>