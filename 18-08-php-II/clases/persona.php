<?php class Persona
{
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
}