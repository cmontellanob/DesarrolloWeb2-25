<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fila{
            border:1px solid #F79646;
            color:black;
            background-color: #F79646;
            width: 30px; 
              text-align: center;
        
        }
        .columna {
            border:1px solid #F79646;
            color:white;
            background-color: #F79646;
          
        }
        .contenido{
            border:1px solid #F79646;
            width: 30px; 
              text-align: center;
        }
    </style>
</head>
<body>
    
<?php
$n=$_POST['n'];
$operacion=$_POST['operacion'];
function calcular($a,$b,$operacion){
    switch($operacion){
        case "suma":
            return $a+$b;
            break;
        case "resta":
            return $a-$b;
            break;
        case "multiplicacion":
            return $a*$b;
            break;
        case "division":
            return $a/$b;
            break;
     }
}

?>
<table style="border:1px solid black; border-collapse: collapse;">
    <?php
    for($i=0;$i<=$n;$i++){
        ?>
    <tr>
        <?php for($j=0;$j<=$n;$j++) {
            if($i==0 && $j==0){ 
                echo '<td class="columna">&nbsp;</td>';
            }
            else
            if($i==0)
            {
                echo '<td class="columna">'.$j.'</td>';
            } else {
                if($j==0){
                    echo '<td class="fila">'.$i.'</td>';
                } else {
                    echo '<td class="contenido">'.calcular($i,$j,$operacion).'</td>';
                }
            }
        }
        ?>
    </tr>
        <?php }?>

</table>

</body>
</html>
