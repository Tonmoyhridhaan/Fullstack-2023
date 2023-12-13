<?php
include '../connection.php';
$cat = $_REQUEST['cat'];

$q = "SELECT * from subcatagories where catagoryid = $cat";
$result = mysqli_query($conn, $q);
$data = [];
while($row = mysqli_fetch_array($result)){
    $data[] = $row;
}
echo json_encode($data);

?>