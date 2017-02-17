<?php   
$total = $_POST['total'];
$total =intval($total);
//echo $total;
echo "<br>";
 for($i=1;$i<=$total;$i++){
 	$servicio=$_POST['servicio'.strval($i)];
 	$costo=$_POST['costo'.strval($i)];
 	echo $servicio;
 	echo "  ";
 	echo $costo;
 	echo "<br>";
 }
?>