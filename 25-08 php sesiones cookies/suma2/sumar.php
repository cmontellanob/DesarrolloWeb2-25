<?php
$suma=0;
foreach($_POST['sumando'] as $valor){
    $suma+= $valor;
}
echo "El resultado de la suma es: $suma";
?>
