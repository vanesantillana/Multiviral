<?php  
$archivo = "contador.txt"; 
$abre = fopen($archivo, "r");
$total = fread($abre, filesize($archivo));
fclose($abre); 
$abre = fopen($archivo, "w"); 
$total = $total + 1; 
$grabar = fwrite($abre, $total); 
fclose($abre); 

//echo " <span class='views'>".$total."</span>";
?>
