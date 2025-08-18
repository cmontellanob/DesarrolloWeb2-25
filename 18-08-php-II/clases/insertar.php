<?php include("pila.php");

$elemento = $_GET["elemento"];
$p = new Pila();
$p->insertar($elemento);

?>