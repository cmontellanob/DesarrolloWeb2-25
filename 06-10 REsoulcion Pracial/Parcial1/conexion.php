<?php
$con=new mysqli("localhost","root","","bd_biblioteca");
if($con->connect_errno){
    die("Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error)  ;
}