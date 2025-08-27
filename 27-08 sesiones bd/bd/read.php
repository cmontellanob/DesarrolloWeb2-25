<?php include("conexion.php");
$sql="SELECT id,nombres,apellidos,sexo,numero_documento from padron";
$result=$con->query($sql);
?>
<table border="1">
    <tr>
     <th> Nombres</th>
     <th> Apellidos</th>
     <th> Sexo</th>
     <th> Numero Documento</th>
     <th> Operaciones</th>
    </tr>
   <?php
      while ($row=mysqli_fetch_array($result))
      {
        ?>
        <tr>
            <td><?php echo  $row['nombres'];?> </td>
            <td><?php echo  $row['apellidos'];?> </td>
            <td><?php echo  $row['sexo'];?> </td>
            <td><?php echo  $row['numero_documento'];?> </td>
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
<a href="form-insertar.html"> Insertar</a>
