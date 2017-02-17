<?php 
	$servicio=array(array("servicio1","20"),array("servicio2","32"),array("servicio3","12"),array("servicio4",19));
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

 <script type="text/javascript">
    var servicio=<?php echo json_encode($servicio);?>;
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
		    	<select class="col-md-2" id="servicio1" name="servicio1" onchange="myFunction()">
					  <?php echo $opcion; ?>
		    	</select> 
		     	<input class="col-md-2" id="costo1" type="text" name="costo1" value=""/>
		     	<input class="col-md-2 bt_plus" id="1" type="button" value="+" />
			</div>

			<button type="submit" class="boton">Save</button>
		</form>
	</div>
	
<select id="mySelect" onchange="myFunction()">
  <option value="Audi">Audi
  <option value="BMW">BMW
  <option value="Mercedes">Mercedes
  <option value="Volvo">Volvo
</select>
	<p id="demo"></p>


<script>
function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}
</script>
</body>
</html>