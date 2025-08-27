<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sumar.php" method ="post">
    <?php
    $n = $_GET['n'];
    for ($i=0; $i<$n; $i++){
        echo '<input type="number" name="sumando[]"><br>'; 
    }
    ?>
    <input type="submit" value="Sumar">
    </form>
</body>
</html>