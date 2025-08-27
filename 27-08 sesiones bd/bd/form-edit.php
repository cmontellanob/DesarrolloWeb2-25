<?php
include("conexion.php");
$id=$_GET['id'];
$sql="SELECT id,nombres,apellidos,sexo,numero_documento from padron where id=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="post">
        
        <label for="nombres">nombres</label> 
        <input type="text" name="nombres" value="<?php echo $row['nombres'];?>">
        <br>
        <label for="apellidos">apellido</label>
        <input type="text" name="apellidos" value="<?php echo $row['apellidos'];?>">
        <br>
        <label for="sexo">sexo</label>
        <select name="sexo">
            <option value="M">masculino</option>
            <option value="F">femenino</option>
        </select>
        <br>
        <label for="numero_documento">numero_documento</label>
        <input type="text" name="numero_documento" value="<?php echo $row['numero_documento'];?>"> 
        <br>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" value="registar">
    </form>
    
</body>
</html>