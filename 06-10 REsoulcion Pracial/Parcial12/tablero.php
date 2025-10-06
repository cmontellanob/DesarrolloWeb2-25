<?php
$numerofilas=$_GET['numerofilas'];
$numerocolumnas=$_GET['numerocolumnas'];
$fila=$_GET['fila'];
$columna=$_GET['columna'];
$color=$_GET['color'];

?>
<table style="border-collapse: collapse;">
    <?php for ($i = 0; $i < $numerofilas; $i++){ ?>
        <tr>
            <?php for ($j = 0; $j < $numerocolumnas; $j++) { ?>
                <?php if (($i+$j)%2==0) $color="red"; else $color="blue"; ?>
                <td style="width:30px; height:30px;  background-color: <?php echo (($i+$j)%2==0) ? 'white':'red'; ?>">
                <?php 
                if ($i==$fila && $j==$columna) echo "<span style='color:$color'>&#9733;</span>"; else echo "&nbsp";
                ?>
            
            </td>
            <?php } ?>
        </tr>
    <?php } ?>    
</table>
