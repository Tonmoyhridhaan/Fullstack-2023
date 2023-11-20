<?php include 'connection.php'; ?>
<?php 
    $teacher_id = $_REQUEST['tId'];
    $str = "DELETE from department_admins WHERE id=$teacher_id";
    if(mysqli_query($conn, $str)){
        header('Location: dashboard.php');
    }
?>