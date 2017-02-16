<?php 
	$servicio=array("servicio1","servicio2","servicio3","servicio4");
	$costo=array("20","32","12","19");
	$tam=count($servicio);
	$lista;
	for ($i=0; $i<$tam ; $i++) { 

	}
 ?>

 <script type="text/javascript">
    var servicio=<?php echo json_encode($servicio);?>;
    var costo=<?php echo json_encode($costo);?>;
    for(var i=0;i<servicio.length;i++){
        document.write("<br>"+servicio[i]);
    }
    for(var i=0;i<costo.length;i++){
        document.write("<br>"+costo[i]);
    }
</script>

<!DOCTYPE html>
<html>
<head>
<title>Prueba</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.addfield.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form id="form" name="form" method="post" action="recep.php">  
			<input type="text" value="1" id="total" name="total" style="visibility: hidden;">
			<div id="div_1" class="row">
		    	<input class="col-md-2" id="servicio1" type="text" name="servicio1"  />
		     	<input class="col-md-2" id="costo1" type="text"   name="costo1"  />
		     	<input class="col-md-2 bt_plus" id="1" type="button" value="+" />
			</div>

			<button type="submit" class="boton">Save</button>
		</form>
	</div>
</body>
</html>