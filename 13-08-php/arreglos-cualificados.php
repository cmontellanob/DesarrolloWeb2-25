<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $alumno['nombre']='Juan';
    $alumno['apellido']='Perez';
    $alumno['edad']=5;
    foreach ($alumno as $indice=>$valor)
    {
        echo $indice." : ". $valor."<br>";
    }
    $alumno2=array("nombre"=>"Juan","apellido"=>"perez","Edad"=>4);
    foreach ($alumno2 as $indice=>$valor)
    {
        echo $indice." : ". $valor."<br>";
    }

    $alumno3=["nombre"=>"Juan","apellido"=>"perez","Edad"=>4];
    foreach ($alumno3 as $indice=>$valor)
    {
        echo $indice." : ". $valor."<br>";
    }

?>
</body>
</html>