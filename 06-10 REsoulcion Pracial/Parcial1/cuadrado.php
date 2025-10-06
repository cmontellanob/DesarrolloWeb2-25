<?php include 'pizarra.php';
session_start(); 

if(isset($_SESSION['pizarra'])){
    $_SESSION['pizarra']->Cuadrado();
}else{
    echo "No hay pizarra creada";
    echo "<meta http-equiv='refresh' content='2;url=menu.html'>";
}   
?>
