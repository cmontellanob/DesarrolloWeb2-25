<?php include "conexion.php";
$sql="SELECT id,tiporeceta FROM tiporeceta";
$result=mysqli_query($con,$sql);

while($fila=mysqli_fetch_assoc($result)){
    ?>
   <option value="<?php echo $fila['id']; ?>"><?php echo $fila['tiporeceta']; ?></option>
    <?php } ?>