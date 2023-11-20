<?php include 'connection.php'; ?>
<?php
    $str = "select * from department_admins";
    $q = mysqli_query($conn, $str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Users</h2>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Email</th>          
                <th>Department</th>
                <th>Role</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php 
                  ?> 
                    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link" href="registration.php">Create Users</a>
                            </li>
                            </ul>
                            <form class="d-flex">
                                <a href="logout.php" class="btn btn-danger">Logout</a>
                            </form>
                        </div>
                    </nav>
                    <?php
                    while($r = mysqli_fetch_array($q)){ ?>
                        <tr>
                            <td><?php echo $r['name']; ?></td>
                            <td><?php echo $r['email']; ?></td>                        
                            <td><?php echo $r['department']; ?></td>
                            <td><?php echo $r['role']; ?></td>                         
                            <td>
                                <a class="btn btn-primary" href="edit.php?tId=<?php echo $r['id'] ?>" >Edit</a>
                                <a class="btn btn-secondary" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>" >Delete</a>
                                <div class="modal" id="myModal<?php echo $r['id']; ?>"> 
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Confirmation</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Are you sure you want to delete <?php echo $r['name']; ?> ?
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete.php?tId=<?php echo $r['id'] ?>">Yes</a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php }
                ?>               
            </tbody>
        </table>
    </div>
</body>
</html>