<?php session_start();
include("proteger.php");
include("permiso.php");
include("conexion.php");
$id=$_GET['id'];
$sql="SELECT id,fotografia,nombres,apellidos,sexo,numero_documento,ocupacion_id from padron where id=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$sql="SELECT id,nombre from ocupaciones";
$result2=$con->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="post" enctype="multipart/form-data">

        <label for="fotografia">fotografia</label>
        <img width="100px" src ="images/<?php echo $row['fotografia'];?>" >
        <input type="file" name="fotografia">
        <br>
        <label for="nombres">nombres</label> 
        <input type="text" name="nombres" value="<?php echo $row['nombres'];?>">
        <br>
        <label for="apellidos">apellido</label>
        <input type="text" name="apellidos" value="<?php echo $row['apellidos'];?>">
        <br>
        <label for="sexo">sexo</label>
        <select name="sexo">
            <option value="M" <?php echo $row['sexo']=='M'?'selected':'' ?>>masculino</option>
            <option value="F" <?php echo $row['sexo']=='F'?'selected':'' ?>>femenino</option>
        </select>
        <br>
        <label for="numero_documento">numero_documento</label>
        <input type="text" name="numero_documento" value="<?php echo $row['numero_documento'];?>"> 
        <br>
        <label for="ocupacion">ocupacion</label>
        <select name="ocupacion_id">
            <?php while ($row2=mysqli_fetch_array($result2))
        {?>
      <option value="<?php echo $row2["id"];?>" <?php echo $row2["id"]==$row["ocupacion_id"]?"selected":"";?> >
                <?php echo $row2["nombre"];?></option>
      <?php  
      }?>
        </select>
        <br>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" value="registar">
    </form>
    
</body>
</html>