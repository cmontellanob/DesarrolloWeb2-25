<?php include("pila.php");
session_start();
if (!isset($_SESSION['pila'])) {
    die("La pila está vacía.");
}
$elemento=$_SESSION['pila']->eliminar();
echo "El elemento eliminado es: ".$elemento;
?>
<h1>Elemento Eliminado</h1>
<meta http-equiv="refresh" content="3;url=menu.html">