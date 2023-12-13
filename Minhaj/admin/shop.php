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
    <p>Login Page</p>
    <h1>All district selection Using json</h1>
    <div class="card" style="width:500px">
        <form method="post" class="pl-5 pr-5 pb-5 pt-5">
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="name">
            </div>
            <div class="form-group">
                <label for="email">Quantity:</label>
                <input type="number" class="form-control" id="email" placeholder="Enter email" name="quantity">
            </div>
            <div class="form-group">
                <label for="email">Catagory:</label>
               
                <select class="form-control" id="catagory" name = "catagory">
                   <option value=" ">--Choose Catagory---</option>
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
            <div class="form-group">
                <label for="email">Sub - Catagory:</label>
                <select class="form-control" id="subcatagory" name = "subcatagory"></select>

            </div> 
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Login</button>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#catagory').change(function(){
                    var cat= $('#catagory').val();
                    //alert(cat);
                    $.ajax({
                        url: 'getsubcat.php',
                        dataType:"json",
                        data : {
                            "cat" : cat
                        },
                        success : function(res){
                            //console.log(res);
                            $("#subcatagory").html("<option value=''> --Choose Sub Catagory--- </option>");
                            $.each(res, function(i, item) {
                                $("#subcatagory").append(" <option value='"+item.id+"'>"+item.name+"</option>");
                            });
                        }
                    });
                });
            });
        </script>
    </body>
</html>










<?php 
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
