<?php
include("conexion.php");
$id=$_GET['id'];
$sql="DELETE FROM padron where id=?";
$stmt=$con->prepare($sql); 
$stmt->bind_param("i",$id);
if($stmt->execute())
{
    echo "registro eliminado";
}
?>
<meta http-equiv="refresh" content="2;url=read.php">