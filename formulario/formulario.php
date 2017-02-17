<!DOCTYPE html>
<html>
<head>
<title>Prueba</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery.addfield.js"></script>
	<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="stylized" class="myform" style="margin:20px auto;">
		<form id="form" name="form" method="post" action="recep.php">
			<div id="material_comprado"  > </div>  
			<input type="text" value="1" id="total" name="total" style="visibility: hidden;">
			<h1>Compra de material</h1>
			<p>Si es necesario a&ntilde;ade el material a comprar</p>
			<div id="div_1">
				<label>Material de compra
					<span class="small">A&ntilde;ade los materiales</span>
				</label>
		    	<input  type="text" id="servicio1"  name="servicio1"  style="width:200px;" />
		     	<span style="float:left;padding: 8px 0px 8px 8px;">Cantidad:</span> 
		     	<input id="costo1" type="text"   name="costo1"  style="width:40px;" />
		     	<input class="bt_plus" id="1" type="button" value="+" />
			</div>

			<button type="submit" class="boton">Save</button>
		</form>
	</div>
</body>
</html>