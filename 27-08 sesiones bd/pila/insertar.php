<?php include("pila.php");
      session_start();
if (!isset($_SESSION['pila'])) {
    $_SESSION['pila'] = new Pila();
}
$elemento = $_GET["elemento"];
$_SESSION['pila']->insertar($elemento);

?>
<h1>Elemento insertado</h1>
<meta http-equiv="refresh" content="3;url=menu.html">