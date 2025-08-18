<?php include ("persona.php");
$persona = new Persona("Juan", 30);
echo "Nombre: " . $persona->getNombre() . "<br>";
echo "Edad: " . $persona->getEdad() . "<br>";
