<?php session_start();
include("proteger.php");
include("conexion.php");
$orden="id";
if (isset($_GET['orden']))
{
   $orden=$_GET['orden'];
}
$buscar="%%";
if (isset($_GET['buscar']))
{
   $buscar="%".$_GET['buscar'].'%';
   }

$sql="SELECT p.id,fotografia,nombres,apellidos,sexo,numero_documento,nombre as ocupacion from padron p
left join ocupaciones o on p.ocupacion_id=o.id 
WHERE nombres like ? 
order by ?";

$stmt=$con->prepare($sql);
$stmt->bind_param("ss", $buscar, $orden);
$stmt->execute();
$result=$stmt->get_result();
?>
<div>
   Correo : <?php echo $_SESSION['email']; ?>
   Nivel : <?php echo $_SESSION['rol']; ?>
   <a href="cerrar.php">Cerrar Session</a>
</div>
<form action="read.php" method="get">
   <label for="buscar">buscar</label>
   <input type="text" name="buscar"  value="<?php echo isset($_GET['buscar']) ? $_GET['buscar'] : ''; ?>">
   <input type="submit" value="Buscar">
</form>

<table border="1">
    <tr>
      <th> Fotografia </th>
     <th><a href="read.php?orden=nombres">Nombres</a> </th>
     <th><a href="read.php?orden=apellidos"> Apellidos</a></th>
     <th><a href="read.php?orden=sexo"> Sexo</a></th>
     <th><a href="read.php?orden=numero_documento"> Numero Documento </a></th>
     <th><a href=""> Ocupación</a> </th>
     <th> Operaciones</th>
    </tr>
   <?php
      while ($row=mysqli_fetch_array($result))
      {
        ?>
        <tr>
           <td><img width="100px" src="images/<?php echo  $row['fotografia'];?>" >  </td>
            <td><?php echo  $row['nombres'];?> </td>
            <td><?php echo  $row['apellidos'];?> </td>
            <td><?php echo  $row['sexo'];?> </td>
            <td><?php echo  $row['numero_documento'];?> </td>
            <td><?php echo  $row['ocupacion'];?> </td>

            <td>
               <?php if ($_SESSION['rol']=='admin')
               {?>
               <a href="form-edit.php?id=<?php echo $row['id']?>">Editar</a> 
               <a href="delete.php?id=<?php echo $row['id']?>"> Eliminar</a>
               <?php } ?>
            </td>
            
        </tr>
   <?php
      }
      $con->close();
      ?>
</table>
<?php if ($_SESSION['rol']=='admin')
               {?>
<a href="form-insertar.php"> Insertar</a>
<?php } ?>
