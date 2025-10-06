<?php include 'conexion.php';
$id=$_GET['id'];
$consulta="DELETE FROM libros WHERE id=?";
$stmt=$con->prepare($consulta);
$stmt->bind_param("i",$id);
$stmt->execute();
?>
<meta http-equiv="refresh" content="0;url=pregunta4.php">