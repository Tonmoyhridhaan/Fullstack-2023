<?php
    include '../connection.php';
    $r1['name'] = 'minhaj';
    $r1['email'] = 'mihaj@gmail.com';
    $r1['salary1'] = '345523'; 

    $r2['name'] = 'tanbir';
    $r2['email'] = 'tanbir@gmail.com';
    $r2['salary2'] = '34456'; 

    $r3['name'] = 'imtiaz';
    $r3['email'] = 'imtiaz@gmail.com';
    $r3['salary3'] = '311122'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="display" style="width:100%" id="example">
        <div class="container">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Salary</th>
                <th>Status</th>
            </tr>
            </thead>
        </div>
        <div class="from-group">
            <tbody>
                <tr>
                    <td> <?php echo $r1['name'] ?> </td>
                    <td> <?php echo  $r1['email'] ?> </td>
                    <td ><input type="text" value="<?php echo  $r1['salary1'] ?>" onkeyup="salary()" id="r1"></td>
                    <td><span class="text-danger" id="s1"> </span> </td> 

                </tr>
                <tr>
                    <td> <?php echo  $r2['name'] ?> </td>
                    <td> <?php echo  $r2['email'] ?> </td>
                    <td> <input type="text" value="<?php echo  $r2['salary2'] ?>"onkeyup="salary()" id="r2"></td>
                    <td><span class="text-danger" id="s2"> </span> </td> 
                </tr>
                <tr>
                    <td> <?php echo $r3['name'] ?> </td>
                    <td> <?php echo $r3['email'] ?> </td>
                    <td><input type="text" value="<?php echo  $r3['salary3'] ?>"onkeyup="salary()"  id="r3"></td>
                    <td><span class="text-danger" id="s3"> </span> </td> 
                </tr>
            </tbody>
        </div>
        </table>
        <span class="text-danger" id="salary">sum = </span>
    </div>


    <script>

        function salary(){
            salary1 = document.getElementById("r1").value;
            salary2 = document.getElementById("r2").value;
            salary3 = document.getElementById("r3").value;
            sum = parseInt(salary1)+ parseInt(salary2) + parseInt(salary3);
            document.getElementById("salary").innerHTML = sum;
            if(sum>50000){
           // alert("MONEY OVERR");
            document.getElementById("salary").innerHTML = "Money Overload";
            }
            
            if(salary1>20000){
                document.getElementById("s1").innerHTML = "money overload";
            }
            else if(salary2>20000){
                document.getElementById("s2").innerHTML = "money overload";
            }
            else if(salary3>20000){
                document.getElementById("s3").innerHTML = "money overload";
            }
            else{
                document.getElementById("s1").innerHTML = "";
                document.getElementById("s2").innerHTML = "";
                document.getElementById("s3").innerHTML = "";
            }
            
        }
    </script>
</body>
</html>

