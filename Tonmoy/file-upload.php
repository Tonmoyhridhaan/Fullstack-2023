<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
    <body>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="usr">Image:</label>
                    <input type="file" class="form-control" id="usr" name="image">
                    <img id="output"/>
                    
                </div>
            
                <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $image = $_FILES['image']['name'];
                    $splitted_name = explode(".",$image);
                    $name = $splitted_name[0];
                    $ext = $splitted_name[sizeof($splitted_name)-1];
                    echo $name;
                    echo "<br>";
                    echo $ext;
                    $date = date('D:M:Y');
                    $time = date('h:i:s');
                    echo "<br>";
                    echo $date;
                    echo "<br>";
                    echo $time;
                    $new_name = md5($date.$time);
                    echo "<br>";
                    echo $new_name;
                    $final_name = $new_name.".".$ext;
                    echo "<br>";
                    echo $final_name;

                    include 'connection.php';
                    $query = "INSERT INTO image (name) VALUES ('$final_name')";
                    if(mysqli_query($con, $query)){
                        echo '<br><span style="color:green;"> Successfully inserted </span>';
                        if(move_uploaded_file($_FILES["image"]["tmp_name"], "images/$final_name")){
                            echo '<br><span style="color:green;"> Successfully transfered </span>';
                        }

                    }
                    

                }
            ?>
        </div>
        <script>
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
                }
            };
        </script>
    </body>
</html>
