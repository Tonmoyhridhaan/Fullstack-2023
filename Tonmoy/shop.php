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
    <h2>Insert Product page</h2>
    <p>Information of a product</p>
    <div class="card" style="width:500px">
        <form method="post" class="pl-5 pr-5 pb-5 pt-5">
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="email">price:</label>
                <input type="number" class="form-control" id="email" placeholder="Enter price" name="price">
            </div>
            <div class="form-group">
                <label for="email">Quantity:</label>
                <input type="number" class="form-control" id="email" placeholder="Enter quantity" name="quantity">
            </div>
            <div class="form-group">
                <label for="email">Catagory:</label>
               
                <select class="form-control" id="category" name = "category">
                <option value="">--Choose Category--</option>
                    <?php
                        include 'connection.php';
                        $query = "SELECT * FROM categories";
                        $result = mysqli_query($con, $query);
                        while($row = mysqli_fetch_array($result)){


                    ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                    
                    <?php
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Sub category:</label>
               
                <select class="form-control" id="subcategory" name = "subcategory">
                
                </select>
            </div>
            
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Login</button>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#category').change(function(){
                    var cat = $('#category').val();
                    $.ajax({
                        url: 'getsubcat.php',
                        dataType:"json",
                        data : {
                            "cat" : cat
                        },
                        success: function(res){
                            //console.log(res);
                            $("#subcategory").html("<option value=''>--Choose Subcategoty--</option>");
                            $.each(res, function(i, item) {
                                $("#subcategory").append("<option value='"+item.id+"'>"+item
                                .name+"</option>");
                            });
                        }
                    })
                });
            });

        </script>
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
