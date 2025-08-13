<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $vocales=array("a","e","i","o","u");
    for ($i=0;$i<count($vocales);$i++)
    {
        echo "<p>".$vocales[$i]."</p>";
    }
    ?>
    <h2>Ciclo Foreach</h2>
    <?php
    foreach ($vocales as $elemento)
    {
        echo "<p>".$elemento."</p>";
    }
    ?>
     <h2>Ciclo Foreach con indices</h2>
    <?php
    foreach ($vocales as $indice=>$elemento)
    {
        echo "<p> arreglo en su posicion $indice es $elemento</p>";
    }
    ?>
</body>
</html>