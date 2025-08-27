<?php
$suma=0;
$n=$_POST["n"];
for($i=0; $i<$n;$i++){
    $suma+= $_POST["sumando$i"];
}
echo "El resultado de la suma es: $suma";
?>
