<?php

	 $dbhost = 'localhost';
	 $dbuser = 'nash';
	 $dbpass = '123456';
	 $dbname = 'prueba3';
	 //ini_set('display_errors', 1);
	 //error_reporting(E_ALL);
	 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	 header("Content-Type: text/html;charset=utf-8");
	$conn->set_charset("utf8");

$url = isset($_SERVER['HTTP_REFERER']);

$sql = "SELECT `visitas` FROM `visitas` WHERE `url`='$url'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
$visitas='';

/*
if (isset($_COOKIE[md5($url)])) {
    // si existe la cookie solo le damos el valor a $visitas
    $visitas = $row['visitas'];
    //echo "document.write($visitas);";
} elseif (!isset($_COOKIE[md5($url)])) {
*/
    $rows = mysqli_num_rows($query);
    if ($rows > 0) {
        // Cuando si existe la url actualizamos
        $SQL = "UPDATE `visitas` SET `visitas`=visitas+1 WHERE `url`='$url'";
        if (mysqli_query($conn, $SQL)) { // Si se inserta la visita
            $visitas = ($row['visitas']) + (1); // Le sumamos uno para mostrar la visita actual
            setcookie(md5($url), '_vStD', time() + 86400); // Y creamos la cookie de 1 dia
        } else { // Si no se inserta la visita
            $visitas = $row['visitas']; // Solo obtenemos las visitas
        }
    } elseif ($rows == 0) {
        // Cuando no existe la url en la bd la insertamos
        $SQL = "INSERT INTO `visitas` (`url`,`visitas`) VALUES ('$url',1)";
        if (mysqli_query($conn, $SQL)) { // Si se inserta la nueva url
            setcookie(md5($url), '_vStD', time() + 86400); // Y creamos la cookie de 1 dia
        } else { // Si no se inserta
        }

}
?>