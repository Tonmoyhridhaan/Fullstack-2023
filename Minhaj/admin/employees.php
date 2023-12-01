<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
  <h2>Employees Table</h2>
  <p>Full stack employees</p>           
  <table class="display" style="width:100%" id="example">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
            include '../connection.php';
            $sql = "SELECT * FROM employees";
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($result)) {
        ?>
      <tr>
        
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['salary']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td>
             <a class="btn btn-secondary" href="edit.php?id=<?php echo $row['id'] ?>" >Edit</a>
            <button class="btn btn-danger">Delete</button>
        </td>
       
      </tr>
      <?php } ?>
      
    </tbody>
    <tfoot>
            <tr>
                <th colspan="3" style="text-align:right">Total:</th>
                <th></th>
            </tr>
        </tfoot>
  </table>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
new DataTable('#example', {
    footerCallback: function (row, data, start, end, display) {
        let api = this.api();
 
        // Remove the formatting to get integer data for summation
        let intVal = function (i) {
            return typeof i === 'string'
                ? i.replace(/[\$,]/g, '') * 1
                : typeof i === 'number'
                ? i
                : 0;
        };
 
        // Total over all pages
        total = api
            .column(3)
            .data()
            .reduce((a, b) => intVal(a) + intVal(b), 0);
 
        // Total over this page
        pageTotal = api
            .column(3, { page: 'current' })
            .data()
            .reduce((a, b) => intVal(a) + intVal(b), 0);
 
        // Update footer
        api.column(3).footer().innerHTML =
            '$' + pageTotal + ' ( $' + total + ' total)';
    }
});
</script>
</body>
</html>