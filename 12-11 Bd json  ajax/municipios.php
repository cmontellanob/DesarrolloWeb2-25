
    <?php include('conexion.php');
    $idprovincia=$_GET['idprovincia'];
    $sql = "SELECT id,municipio FROM `municipios` WHERE idprovincia=$idprovincia";
    $resultado = $con->query($sql);

    $municipios = array();
    while ($row = $resultado->fetch_assoc()) {
        $municipios[] = $row;
    }
    echo json_encode($municipios, JSON_UNESCAPED_UNICODE);
    ?>
