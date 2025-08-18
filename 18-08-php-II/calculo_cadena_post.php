<?php 
$cadena=$_POST["cadena"];
$palabras=explode(" ",$cadena);
foreach ($palabras as $palabra)
{
    echo '<div style="text-align:center">',$palabra,'</div>';
}
?>