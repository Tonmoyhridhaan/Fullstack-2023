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
            <h2>Create Team</h2>
            <button type="button" class="btn btn-success" onclick="addRow()">+</button>
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <table class="table-bordered" id="team">
                            <thead>
                                <th>Name</th>
                                <th>Height</th>
                                <th>weight</th>
                                <th>Age</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control"  name="name[]"></td>
                               
                                    <td><input type="number" class="form-control"  name="height[]"></td>
                               
                                    <td><input type="number" class="form-control"  name="weight[]"></td>

                                    <td><input type="number" class="form-control"  name="age[]"></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include '../connection.php';
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $height = $_POST['height'];
                $weight = $_POST['weight'];
                $age = $_POST['age'];
                foreach ($name as $key => $value){
                    $name_p = $name[$key];
                    $query = "INSERT INTO team (name, height, weight, age) VALUES ('$name_p',$height[$key],$weight[$key],$age[$key])";
                    if(mysqli_query($conn, $query)){
                        echo '<br><span style="color:blue;"> Successfull</span>';

                    }
                }
            }
        ?>

            <script>
                function addRow(){
                    //alert("clicked");
                    var table = document.getElementById("team");
                    console.log(table);
                    var row = table.insertRow(-1);

                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);
                    var cell5 = row.insertCell(4);
                    
                    cell1.innerHTML = '<input type="text" class="form-control"  name="name[]">';
                    cell2.innerHTML = '<input type="number" class="form-control"  name="height[]">';
                    cell3.innerHTML = '<input type="number" class="form-control"  name="weight[]">';
                    cell4.innerHTML = '<input type="number" class="form-control"  name="age[]">';
                    cell5.innerHTML = '<button class="btn btn-danger" onclick="removeRow(this)"> X </button>';
                }
                function removeRow( button ){
                    var row = button.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                }
            </script>
    </body>
</html>