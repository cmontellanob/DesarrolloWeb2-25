<?php session_start();
include("conexion.php");
include("proteger.php");
include("permiso.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$ocupacion_id=$_POST['ocupacion_id'];
$numero_documento=$_POST['numero_documento'];
if (isset($_FILES['fotografia']['name']))
{
$nombre_archivo=$_FILES['fotografia']['name'];
$nombre_temporal=$_FILES['fotografia']['tmp_name'];
$extension= explode(".", $nombre_archivo);
$nombre_nuevo=uniqid().".".end($extension);
copy($nombre_temporal, "images/".$nombre_nuevo);
}
$sql="INSERT INTO padron(fotografia,nombres,apellidos,sexo,numero_documento,ocupacion_id) Values(?,?,?,?,?,?)";
$stmt=$con->prepare($sql);
$stmt->bind_param("sssssi",$nombre_nuevo,$nombres,$apellidos,$sexo,$numero_documento,$ocupacion_id);
if($stmt->execute())
{
    echo "registro exitoso";
}
?>
<meta http-equiv="refresh" content="2;url=read.php">