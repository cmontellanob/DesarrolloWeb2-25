<?php
$imagen = imagecreatefrompng("images/zend.png");
header("Content-Type: image/png");
imagepng($imagen);
?>