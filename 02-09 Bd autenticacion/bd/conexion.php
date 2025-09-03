<?php
$con=new mysqli("localhost","root","","bd_elecciones2");
if ($con->connect_error)    
    { 
        die ("conexion fallada".$con->connect_error);
    }
			
	?>
