<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=5;
    $b=7;
    $c=3;
    if($a>$b){
        if($a>$c){
            echo "El numero mayor es: ".$a;
        }
        else{
            echo "El numero mayor es: ".$b;
        }
    }
    else{if($b>$c){
        echo "El numero mayor es: ".$b;
        }else{
            echo "El mayor es: ".$c;
        }
    }?>
</body>
</html>