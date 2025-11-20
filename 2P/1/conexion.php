<?php
$con=new mysqli("localhost","root","","bd_recetas");
if(!$con){
    die("Error en la conexion: ".mysqli_connect_error());
}
