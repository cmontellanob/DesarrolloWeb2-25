<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    include ("conexion.php");
    $sql = "SELECT id,editorial from editoriales";
    $result=$con->query($sql);
    ?>

    <div>
        <form action="create.php" method="post"  enctype="multipart/form-data">
            <div style="display: flex;">
    <div>
           <div>
                <label for="imagen">Imagen:</label>
                <input type="file" name="file1" >
            </div>
                <div>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo1" >
            </div>

            <div>
                <label for="autor">Autor:</label>
                <input type="text" name="autor1" >
            </div>

            <div>Editorial:</label>
                <select name="ideditorial1" >
            <?php $opciones="";
            while ($row=mysqli_fetch_array($result))
      {  
      $opciones.='<option value="'.$row["id"].'">'.$row["editorial"].'</option>';
      
      }
        echo $opciones;
      ?>   
                </select>
            </div>
            <div>
                <label for="año">Año:</label>
                <input type="number" name="año1" >
            </div>

            </div>
            <div>
           <div>
                <label for="imagen">Imagen:</label>
                <input type="file" name="file2" >
            </div>
                <div>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo2" >
            </div>

            <div>
                <label for="autor">Autor:</label>
                <input type="text" name="autor2" >
            </div>

            <div>Editorial:</label>
                <select name="ideditorial2" >
           <?php echo $opciones;?>
                </select>
            </div>
            <div>
                <label for="año">Año:</label>
                <input type="number" name="año2" >
            </div>

            </div>
            </div>
            <div>
                
    <input type="submit" value="registar">
</div>

        </form>



    </div>
    
</body>
</html>