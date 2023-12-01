<?php
    include '../connection.php';
    $r1['name'] = 'minhaj';
    $r1['email'] = 'mihaj@gmail.com';
    $r1['salary'] = '345523'; 

    $r2['name'] = 'tanbir';
    $r2['email'] = 'tanbir@gmail.com';
    $r2['salary'] = '34456'; 

    $r3['name'] = 'imtiaz';
    $r3['email'] = 'imtiaz@gmail.com';
    $r3['salary'] = '311122'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <table class="display" style="width:100%" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Salary</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $r1['name'] ?> </td>
                <td> <?php echo  $r1['email'] ?> </td>
                <td ><input type="text" value="<?php echo  $r1['salary'] ?>" onkeyup="salary()" id="r1"> </td> 
            </tr>
            <tr>
                <td> <?php echo  $r2['name'] ?> </td>
                <td> <?php echo  $r2['email'] ?> </td>
                <td> <input type="text" value="<?php echo  $r2['salary'] ?>"onkeyup="salary()" id="r2"> </td>
            </tr>
            <tr>
                <td> <?php echo $r3['name'] ?> </td>
                <td> <?php echo $r3['email'] ?> </td>
                <td><input type="text" value="<?php echo  $r3['salary'] ?>"onkeyup="salary()"  id="r3"></td>
            </tr>
        </tbody>
    </table>
    <span class="text-success" id="salary">sum = </span>
</div>


    <script>
        function salary(){
            salary1 = document.getElementById("r1").value;
            salary2 = document.getElementById("r2").value;
            salary3 = document.getElementById("r3").value;
            sum = parseInt(salary1)+ parseInt(salary2) + parseInt(salary3);
            document.getElementById("salary").innerHTML = sum;
        }
    </script>
</body>
</html>

