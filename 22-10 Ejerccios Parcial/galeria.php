<?php
include("conexion.php");
$sql="SELECT * FROM libros";
$result=mysqli_query($con,$sql);
?>
<div style="display:grid; grid-template-columns: auto auto auto; gap:3px;">
<?php
while($fila=mysqli_fetch_assoc($result)){
?>
        <img onclick="modal(<?php echo $fila['id']; ?>)" style="width:50px; height:75px;" src="images/<?php echo $fila['imagen']; ?>" id="<?php echo $fila['id']; ?>" alt="">       

<?php
}
?>
</div>