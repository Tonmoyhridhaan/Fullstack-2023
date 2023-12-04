<?php
    include '../connection.php';
    $id = $_REQUEST['id'];
    $query = "Select * from employees where id=".$id;
    $result = mysqli_query($conn, $query);
    $r = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $r['name'] ?>" id="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $r['email'] ?>" id="">
            </div>

            <div class="form-group">
                <label for="">age</label>
                <input type="text" name="age" class="form-control" value="<?php echo $r['age'] ?>" id="">
            </div>
            <div class="form-group">
                <label for="">salary</label>
                <input type="text" name="salary" class="form-control" value="<?php echo $r['salary'] ?>" id="">
            </div>
            <div class="form-group">
                <label for="">location</label>
                <input type="text" name="location" class="form-control" value="<?php echo $r['location'] ?>" id="">
            </div>
            <div class="container my-5">
                <button type="submit" class="btn btn-success" name="submitBtn">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submitBtn'])){
    $r_name = $_POST['name'];
    $r_email = $_POST['email'];
    $r_age = $_POST['age'];
    $r_salary = $_POST['salary'];
    $r_loc = $_POST['location'];

    $query= "UPDATE name SET name='".$r_name."',email='".$r_email."'

?>