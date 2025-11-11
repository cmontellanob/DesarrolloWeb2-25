<?php include("conexion.php");

$sql="SELECT id,nombres,apellidos,fecha_nacimiento,sexo,correo FROM personas";
$resultado=$con->query($sql);

$personas = array();
    while ($persona = $resultado->fetch_assoc()) {
        $personas[] = $persona;
    }
    echo json_encode($personas, JSON_UNESCAPED_UNICODE);
    ?>

 

