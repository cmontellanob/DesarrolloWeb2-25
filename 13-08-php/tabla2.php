<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        $filas=10;
        $columnas=10;
        ?>
        <table border= "1px">
        <?php for ($i=0;$i<$filas;$i++)
        {
            ?>
            <tr>
            <?php    
            for ($j=0;$j<$columnas;$j++)
            {
                if (($i+$j)%2==0) {
                    ?>
                    <td class="negro"> &nbsp;</td>               
                <?php
                }
                else 
                {
                    ?> <td> &nbsp;</td>
                    <?php
                }
            }
            ?>
            </tr> 
            <?php
        }
    ?>
</body>
</html>