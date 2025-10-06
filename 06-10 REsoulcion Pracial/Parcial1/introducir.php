<?php 
include 'pizarra.php';
session_start();

$palabra = $_GET['palabra'];
$color = $_GET['color'];
$color_fondo = $_GET['color_fondo'];

$_SESSION['pizarra'] = new Pizarra($palabra, $color, $color_fondo);

?>
<meta http-equiv="refresh" content="0;url=menu.html">
