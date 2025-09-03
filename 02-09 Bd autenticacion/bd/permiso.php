<?php   
if ($_SESSION['rol']!='admin')
{
        ?> 
        <meta http-equiv="refresh" content="2;url=read.php">
        <?php
        die("Usted no esta autorizado a realizar  esta operación");

}
?>