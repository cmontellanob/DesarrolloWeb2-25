<?php
include('conexion.php');
$sql = "SELECT id,departamento FROM `departamentos`";
    $resultado = $con->query($sql);

    $departamentos = array();
    while ($row = $resultado->fetch_assoc()) {
        $departamentos[] = $row;
    }
    echo json_encode($departamentos, JSON_UNESCAPED_UNICODE);
    ?>
