<?php
include 'conexion.php';
if (!isset($_GET['orden'])){
    $_GET['orden']='libros.id';
}
$orden=$_GET['orden'];
$consulta="SELECT * FROM libros
join editoriales on libros.ideditorial=editoriales.id order by $orden";
$resultado=$con->query($consulta);
?>
<table style="border:1px solid rgba(25, 82, 151, 1); border-collapse: collapse;">
    <tr style="background-color: rgba(25, 82, 151, 1) ; color: white;">
        <th>Imagen</th>
        <th><a href="pregunta4.php?orden=titulo">Titulo</a></th>
        <th><a href="pregunta4.php?orden=autor">Autor</a></th>
        <th><a href="pregunta4.php?orden=editorial">Editorial</a></th>
        <th>Operaciones</th>
    </tr>
    <?php
    $i=0;
    while($fila=$resultado->fetch_assoc()){
        $i=$i+1;
        ?>
    <tr style="background-color: <?php echo $i%2==0?'white':'#95B3D7'?> ;border:1px solid rgba(25, 82, 151, 1) ;">
        <td><img src="images/<?php echo $fila['imagen'];?>" width="100px"></td>
        <td><?php echo $fila['titulo'];?></td>
        <td><?php echo $fila['autor'];?></td>
        <td><?php echo $fila['editorial'];?></td>
        <td><a href="eliminar.php?id=<?php echo $fila['id'];?>">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>
</table>