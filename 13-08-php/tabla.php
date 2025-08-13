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
        echo '<table>';
        for ($i=0;$i<$filas;$i++)
        {
            echo "<tr>";
            for ($j=0;$j<$columnas;$j++)
            {
                if ( ($i+$j)%2 ==0)
                {
                   echo '<td class="negro" > &nbsp;</td>';     
                }
                else
                {
                    echo "<td > &nbsp;</td>";
                }
                
            }
            echo "</tr>";
        }
    ?>
</body>
</html>

