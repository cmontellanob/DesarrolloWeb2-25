<?php include("conexion.php");
$file1=$_FILES['file1']['name'];
$file2=$_FILES['file2']['name'];    
$titulo1=$_POST['titulo1'];
$titulo2=$_POST['titulo2']; 
$autor1=$_POST['autor1'];
$autor2=$_POST['autor2'];
$ideditorial1=$_POST['ideditorial1'];
$ideditorial2=$_POST['ideditorial2'];
$año1=$_POST['año1'];
$año2=$_POST['año2'];
$sql="INSERT into libros (imagen,titulo,autor,ideditorial,anio) values (?,?,?,?,?)";
$stmt=$con->prepare($sql);  
$stmt->bind_param("sssis",$file1,$titulo1,$autor1,$ideditorial1,$año1);
if($stmt->execute())        
{
    echo "registro exitoso";
    move_uploaded_file($_FILES['file1']['tmp_name'],"images/".$file1);
    
}
$sql="INSERT into libros (imagen,titulo,autor,ideditorial,anio) values (?,?,?,?,?)";
$stmt=$con->prepare($sql);
$stmt->bind_param("sssis",$file2,$titulo2,$autor2,$ideditorial2,$año2);
if($stmt->execute())        
{
    echo "registro exitoso";
    
    move_uploaded_file($_FILES['file2']['tmp_name'],"images/".$file2);
}
$sql="SELECT imagen,titulo from libros";
$result=$con->query($sql);
?>
<table>
    <tr>
        <th>Imagen</th>
        <th>Titulo</th>
    </tr>
   <?php while($row=$result->fetch_assoc()){?>
    <tr>
        <td><img src="images/<?php echo $row['imagen']; ?>" width="100"></td>
        <td><?php echo $row['titulo']; ?></td>
    </tr>
    <?php } ?>
</table>

