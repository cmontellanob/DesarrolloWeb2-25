<?php   
if (!isset($_SESSION['email']))
{
        ?> 
        <meta http-equiv="refresh" content="2;url=form-login.html">
        <?php
        die("Usted no est autorizado");

}
?>