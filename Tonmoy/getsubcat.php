<?php

    include 'connection.php';
    $cat = $_REQUEST['cat'];
    $query = "SELECT * FROM subcategories WHERE categoryid = $cat";

    $result = mysqli_query($con, $query);
    $data = [];
    while($row = mysqli_fetch_array($result)){
        $data[] = $row;
    }
    echo json_encode($data);
?>