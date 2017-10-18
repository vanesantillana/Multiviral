<?php
include_once 'connect.php';
//$sql1 = "SELECT SUM(visitas) AS value_sum FROM visitas";
$sql1="SELECT visitas AS value_sum from visitas order by id desc limit 1";
$query1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_row($query1);
echo json_encode($row1);
?>