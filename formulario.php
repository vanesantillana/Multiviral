<?php 
	$servicio=array(array("servicio1","20"),array("servicio2","32"),array("servicio3","12"),array("servicio4",19));
	$tam=count($servicio);
	/*
	for ($i=0; $i<$tam ; $i++) { 
		for ($j=0; $j<2; $j++) { 
			echo $servicio[$i][$j];
			echo " ";
		}
		echo "<br>";
	}*/
 ?>

<!DOCTYPE html>
<html>
<head>

 <script type="text/javascript">
    var servicio=<?php echo json_encode($servicio);?>;
    for (var i=0; i<servicio.length; i++) { 
		for (var j=0; j<servicio[0].length; j++) { 
			document.write(servicio[i][j]);
			document.write(" ");
		}
		document.write("<br>");
	}

 </script>

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
		    	<select class="col-md-2" id="servicio1" type="text" name="servicio1">
					 <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
		    	</select> 
		     	<input class="col-md-2" id="costo1" type="text"   name="costo1"  />
		     	<input class="col-md-2 bt_plus" id="1" type="button" value="+" />
			</div>

			<button type="submit" class="boton">Save</button>
		</form>
	</div>
</body>
</html>