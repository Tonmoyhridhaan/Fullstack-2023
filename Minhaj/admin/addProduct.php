<!--MULtiple IMAge UPLOAD(short  easier) & PREview-->
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
                        <input type="file" class="form-control" id="image" name="image[]" multiple >
                    </div>
                    <div id="image_preview"></div>
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $price = $_POST['price'];

                include '../connection.php';

                $query = "INSERT INTO product (name, price) VALUES ('$name', '$price')";
                if(mysqli_query($conn, $query)){
                    echo '<br><span style="color:red;">Product(name,Price) Successfully inserted </span>';
                    //$query2 = "SELECT * FROM product";
                    $query2 = "SELECT id FROM product ORDER BY id DESC LIMIT 1";
                    $result = mysqli_query($conn,$query2);
                    //$pid=0;
                    while ($row =mysqli_fetch_assoc($result)){
                        $pid=  $row['id'];
                    }
                    $i=0;
                    foreach($_FILES['image']['tmp_name'] as $key => $value){
                        
                        $i=$i+1;
                        $image = $_FILES['image']['name'][$key];
                        $splitted_name = explode(".",$image);
                        $name = $splitted_name[0];
                        $ext = $splitted_name[sizeof($splitted_name)-1];
                        $new_name = md5(date('Y-m-d H:i:s') );
                        $final_name = $new_name.$i.".".$ext;

                        
                        $query = "INSERT INTO images (pid, name) VALUES ($pid, '$final_name')";
                        if(mysqli_query($conn, $query)){
                            echo '<br><span style="color:green;">Picture Successfully inserted </span>';
                            if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], "images/$final_name")){
                                echo '<br><span style="color:green;"> Successfully transfered </span>';
                            }
                        }
                    }
                }
            }
        ?>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script>
        $("#image").change(function(event) {
            $('#image_preview').html("");
            var total_file = document.getElementById("image").files.length;

            for (var i = 0; i < total_file; i++) {
                var img = $("<img>").attr({
                    src: URL.createObjectURL(event.target.files[i]),
                    width: "20%", 
                    height: "20%" 
                });

                $('#image_preview').append(img);
            }
        });
    </script>

</body>
</html>