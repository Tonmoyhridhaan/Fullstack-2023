<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 
</head>
    <body>
        <div class="container my-5">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="usr">Image:</label>
                    <input type="file" class="form-control" id="imgInp" name="image">
                    <img id="blah" src="#" height="150px" weight="150px" />
                    
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
                    $query = "INSERT INTO images (image) VALUES ('$final_name')";
                    if(mysqli_query($con, $query)){
                        echo '<br><span style="color:green;"> Successfully inserted </span>';
                        if(move_uploaded_file($_FILES["image"]["tmp_name"], "images/$final_name")){
                            echo '<br><span style="color:green;"> Successfully transfered </span>';
                        }
                        header("Location: file_details.php");
                    }
                    

                }
            ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            function readURL(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();

                    reader.onload = function(e){
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function() {
                readURL(this);
            });
        </script>
    </body>
</html>