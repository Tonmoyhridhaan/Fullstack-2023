<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 
</head>
    <body>
        <div class="container">
                
            <h2>Add Product</h2>
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="usr">Name:</label>
                            <input type="text" class="form-control"  name="name">
                        </div>
                        <div class="form-group">
                            <label for="usr">Price:</label>
                            <input type="number" class="form-control"  name="price">
                        </div>
                        <div class="form-group">
                            <label for="usr">Image:</label>
                            <input type="file" class="form-control" id="imgInp" name="image[]" multiple >
                        </div>
                    
                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            
            <?php
                if(isset($_POST['submit'])){

                    $name = $_POST['name'];
                    $price = $_POST['price'];

                    include 'connection.php';

                    $query = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
                    echo "hello";
                    if(mysqli_query($con, $query)){
                        echo '<br><span style="color:green;"> Successfully inserted </span>';
                        echo "hello";
                        $query2 = "SELECT * FROM products";
                        $result = mysqli_query($con,$query2);
                        $pid=0;
                        while($row = mysqli_fetch_array($result)){
                            $pid=$row['id'];
                        }
                        $i=0;
                        foreach($_FILES['image']['tmp_name'] as $key => $value){
                            
                            $i=$i+1;
                            $image = $_FILES['image']['name'][$key];
                            $splitted_name = explode(".",$image);
                            $name = $splitted_name[0];
                            $ext = $splitted_name[sizeof($splitted_name)-1];
                            $date = date('D:M:Y');
                            $time = date('h:i:s');
                            $new_name = md5($date.$time);
                            $final_name = $new_name.$i.".".$ext;

                            
                            $query = "INSERT INTO images (pid, name) VALUES ($pid, '$final_name')";
                            if(mysqli_query($con, $query)){
                                echo '<br><span style="color:green;"> Successfully inserted </span>';
                                if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], "images/$final_name")){
                                    echo '<br><span style="color:green;"> Successfully transfered </span>';
                                }

                            }


                        }
                    }
                    

                }
            ?>
        </div>
        
    </body>
</html>


