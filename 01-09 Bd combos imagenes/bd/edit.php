<?php
    include("conexion.php");

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $sexo=$_POST['sexo'];
    $numero_documento=$_POST['numero_documento'];
    $ocupacion_id=$_POST['ocupacion_id'];
    $id=$_POST['id'];
    $sql="UPDATE padron set nombres=?,apellidos=?,sexo=?,numero_documento=?,ocupacion_id=? where id=?";
    $stmt=$con->prepare($sql);
    $stmt->bind_param("ssssii",$nombres,$apellidos,$sexo,$numero_documento,$ocupacion_id,$id);
    if($stmt->execute())
    {
        echo "registro actualizado";
    }

?>

<meta http-equiv="refresh" content="2;url=read.php">