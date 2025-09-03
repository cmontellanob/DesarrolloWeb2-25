<?php
include("conexion.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$ocupacion_id=$_POST['ocupacion_id'];
$numero_documento=$_POST['numero_documento'];
$sql="INSERT INTO padron(nombres,apellidos,sexo,numero_documento,ocupacion_id) Values(?,?,?,?,?)";
$stmt=$con->prepare($sql);
$stmt->bind_param("ssssi",$nombres,$apellidos,$sexo,$numero_documento,$ocupacion_id);
if($stmt->execute())
{
    echo "registro exitoso";
}
?>
<meta http-equiv="refresh" content="2;url=read.php">