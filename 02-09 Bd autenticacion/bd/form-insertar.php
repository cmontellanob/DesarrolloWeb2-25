<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    include("proteger.php");
    include("permiso.php");

    include ("conexion.php");
    $sql = "SELECT id,nombre from ocupaciones";
    $result=$con->query($sql);
    ?>


    <form action="insert.php" method="post" enctype="multipart/form-data">

        <label for="fotografia">fotografia</label>
        <input type="file" name="fotografia">
        <br>
        <label for="nombres">nombres</label> 
        <input type="text" name="nombres">
        <br>
        <label for="apellidos">apellido</label>
        <input type="text" name="apellidos">
        <br>
        <label for="sexo">sexo</label>
        <select name="sexo">
            <option value="M">masculino</option>
            <option value="F">femenino</option>
        </select>
        <br>
        <label for="numero_documento">numero_documento</label>
        <input type="text" name="numero_documento"> 
        <br>
        <label for="ocupacion">ocupacion</label>
        <select name="ocupacion_id">
            <?php while ($row=mysqli_fetch_array($result))
      {?>
      <option value="<?php echo $row["id"];?>">
                <?php echo $row["nombre"];?></option>
      <?php  
      }?>
        </select>
   <br>
        <input type="submit" value="registar">
    </form>
    
</body>
</html>