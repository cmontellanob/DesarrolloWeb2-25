<?php include "conexion.php"; 

$sql="SELECT recetas.id,fotografia,titulo,tiporeceta,preparacion FROM recetas LEFT JOIN tiporeceta ON recetas.idtiporeceta=tiporeceta.id";

$result=mysqli_query($con,$sql);
?>
<div id="galeria">
    <?php
    while($fila=mysqli_fetch_assoc($result)){
        ?>
        <div class="foto-recerta" >
            <img id="<?php echo $fila['id']; ?>" onclick="mostrarDetalles(<?php echo $fila['id']; ?>)" src="images/<?php echo $fila['fotografia']; ?>" 
            data-titulo="<?php echo $fila['titulo']; ?>" data-tiporeceta="<?php echo $fila['tiporeceta']; ?>" data-preparacion="<?php echo $fila['preparacion']; ?>" >
            >
            <div style="display:none;"  >
                <?php echo $fila['preparacion']; ?>          
            </div>
        </div>
        <?php
    }
    ?>
</div>
