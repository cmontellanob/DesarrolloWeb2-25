<?php session_start();
    include("proteger.php");
    include("permiso.php");
    include("conexion.php");

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $sexo=$_POST['sexo'];
    $numero_documento=$_POST['numero_documento'];
    $ocupacion_id=$_POST['ocupacion_id'];
    $id=$_POST['id'];
    if (isset($_FILES['fotografia']['name']))
{
$nombre_archivo=$_FILES['fotografia']['name'];
$nombre_temporal=$_FILES['fotografia']['tmp_name'];
$extension= explode(".", $nombre_archivo);
$nombre_nuevo=uniqid().".".end($extension);
copy($nombre_temporal, "images/".$nombre_nuevo);
}
    $sql="UPDATE padron set fotografia=?,nombres=?,apellidos=?,sexo=?,numero_documento=?,ocupacion_id=? where id=?";
    $stmt=$con->prepare($sql);
    $stmt->bind_param("ssssiii",$nombre_nuevo,$nombres,$apellidos,$sexo,$numero_documento,$ocupacion_id,$id);
    if($stmt->execute())
    {
        echo "registro actualizado";
    }

?>

<meta http-equiv="refresh" content="2;url=read.php">