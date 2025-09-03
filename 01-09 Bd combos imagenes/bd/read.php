<?php session_start();
include("proteger.php");
include("conexion.php");
$sql="SELECT p.id,fotografia,nombres,apellidos,sexo,numero_documento,nombre as ocupacion from padron p
left join ocupaciones o on p.ocupacion_id=o.id";

$result=$con->query($sql);
?>
<div>
   Correo : <?php echo $_SESSION['email']; ?>
   Nivel : <?php echo $_SESSION['rol']; ?>
   <a href="cerrar.php">Cerrar Session</a>
</div>


<table border="1">
    <tr>
      <th> Fotogradia </th>
     <th> Nombres</th>
     <th> Apellidos</th>
     <th> Sexo</th>
     <th> Numero Documento</th>
     <th> Ocupación</th>
     <th> Operaciones</th>
    </tr>
   <?php
      while ($row=mysqli_fetch_array($result))
      {
        ?>
        <tr>
           <td><img src="images/<?php echo  $row['fotografia'];?>" >  </td>
            <td><?php echo  $row['nombres'];?> </td>
            <td><?php echo  $row['apellidos'];?> </td>
            <td><?php echo  $row['sexo'];?> </td>
            <td><?php echo  $row['numero_documento'];?> </td>
            <td><?php echo  $row['ocupacion'];?> </td>

            <td>
               <a href="form-edit.php?id=<?php echo $row['id']?>">Editar</a> 
               <a href="delete.php?id=<?php echo $row['id']?>"> Eliminar</a>
            </td>
            
        </tr>
   <?php
      }
      $con->close();
      ?>
</table>
<a href="form-insertar.php"> Insertar</a>
