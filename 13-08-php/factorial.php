<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function factorial ($n)
    {
        $f = 1;
        for($i=1;$i<=$n;$i++){
            $f*=$i;
        }
        return $f;
    }
        $n = $_GET['n'];
        echo "El factorial es: ".factorial($n);
    ?>
</body>
</html>