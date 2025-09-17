<?php
$arreglo = array("images/zend.png", "images/laravel.png", "images/yii.png");
$clave = array_rand($arreglo);
$imagen = imagecreatefrompng($arreglo[$clave]);
header("Content-Type: image/png");
imagepng($imagen);
?>