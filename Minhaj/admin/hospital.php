<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    </head>
    <body>
        <div class="container">
            <h2>Choose test page</h2>
            <p>Information of a patient</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="width:500px">
                        <form method="post" class="pl-5 pr-5 pb-5 pt-5">
                            <div class="form-group">
                                <label for="email">Name:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">email:</label>
                                <input type="eamil" class="form-control" id="email" placeholder="Enter email" name="price">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact:</label>
                                <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
                            </div>
                                    <div class="form-group"></div>
                            <div>
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-success" value="4000" id="test">X-Ray</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-success" value="5000" id="test">MRI</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-success" value="6500" id="test">ECG</button>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <button type="button" class="btn btn-success" value="4500" id="test">CT Scan</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-success" value="200" id="test">Blood test</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-success" value="650" id="test">Dengue</button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <table class="display table table-bordered" style="width:100%" id="example">
                        <thead>
                            <tr>
                            <th>Test</th>
                            <th>cost</th>    
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Total</strong></td>
                                <td id= "total">0</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
            <script>
                var total=0;
                $(document).ready(function(){
                    var dataTable = $('#example').DataTable();
                    $('.btn').click(function(){
                        var test = $(this).text();
                        var cost = $(this).val();
                        total = parseInt(total) + parseInt(cost);
                        var newRow = $("<tr>").append(
                            $("<td>").text(test),
                            $("<td>").text(cost)
                        );
                        dataTable.row.add(newRow).draw();
                    $("#total").html(total);
                    });
                });
        </script>
    </body>
</html>

