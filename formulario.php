<?php 
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '123456';
 $dbname = 'prueba';
 ini_set('display_errors', 1);
 error_reporting(E_ALL);
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
 header("Content-Type: text/html;charset=utf-8");
$conn->set_charset("utf8");

$query="SELECT * FROM servicios";
$result = $conn->query($query);

$results = array();
while($row = $result->fetch_row()) {
  $rows[]=$row;
}

function print_array($arr){
	for ($i=0; $i<count($arr); $i++) {
		for ($j=0; $j<count($arr[$i]); $j++) {
			echo $arr[$i][$j];
			echo " | ";
		}
		echo "<br>";
	} 	
}

$servicio=array(array("Selecciona dato","0"));//,array("servicio1","20"),array("servicio2","32"),array("servicio3","12"),array("servicio4",19));
$tam=count($rows);
for ($i=0; $i<$tam; $i++) {
	array_push($servicio, array($rows[$i][1],$rows[$i][2]));
} 

$tam=count($servicio);

$opcion="";
for ($i=0; $i<$tam ; $i++) { 
	$opcion=$opcion."<option value='";
	$opcion=$opcion.$i;
	$opcion=$opcion."'>";
	$opcion=$opcion.$servicio[$i][0];
	$opcion=$opcion."</option>";
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <script type="text/javascript">
    var servicio=<?php echo json_encode($servicio);?>;
    console.log(servicio);
/*    var opcion="";
    for (var i=0; i<servicio.length; i++) { 		 
		opcion=opcion+"<option value=";
		opcion=opcion+"1";
		opcion=opcion+servicio[i][0];
		opcion=opcion+"</option>";
	}*/
 </script>

<title>Prueba</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.addfield.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form id="form" name="form" method="post" action="">  
			<input type="text" value="1" id="total" name="total" style="visibility: hidden;">
			<div id="div_1" class="row">
		    	<select class="col-md-2 importe_linea" value="" id="servicio1" name="servicio1" onchange="refresh(this)">
					  <?php echo $opcion; ?>
		    	</select> 
		     	<p class="col-md-2" id="demo1" name="demo"></p>
		     	<input class="col-md-2 bt_plus" id="1" type="button" value="+" />
			</div>
			Total: <input type="text" id="total_final" value="0"/>
		</form>
	</div>
</body>
</html>