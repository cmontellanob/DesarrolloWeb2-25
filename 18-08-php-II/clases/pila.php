<?php
class Pila {
    private $elementos= array ();
    private $tope;
    function __construct (){
        $this-> tope = 0 ; 

    }

    function insertar ($elemento) {
        $this-> elementos [$this->tope]= $elemento;
        $this-> tope ++ ; 


    }
    function Eliminar() {
        if($this ->tope >0){
            $valor=$this->elementos[$this->tope];
            $this ->tope--;
            return $valor;
        }
        else{
            echo "La pila esta vacia.";
        }
    }
    function mostrar(){
        for($i=0;$i<$this->tope;$i++){
            echo $this->elementos[$i];
        }
    }
    
}