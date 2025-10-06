<?php
class Pizarra{
     var $palabra, $color, $color_fondo;

    function __construct($palabra, $color, $color_fondo) {
        $this->palabra = $palabra;
        $this->color = $color;
        $this->color_fondo = $color_fondo;
    }
        function Cuadrado(){
            $longitud= strlen($this->palabra);
            echo '<span style="color:'.$this->color.'; background-color:'.$this->color_fondo.';">'. $this->palabra.'</span>';
            echo "<br>";
            for ($i=1;$i<$longitud-1;$i++){
                echo '<span style="color:'.$this->color.'; background-color:'.$this->color_fondo.';">'. substr($this->palabra,$i,1).'</span>';
                for($j=0;$j<$longitud-2;$j++){
                    echo "&nbsp;&nbsp;&nbsp;";
                }
                echo '<span style="color:'.$this->color.'; background-color:'.$this->color_fondo.';">'. substr($this->palabra,$longitud-$i-1,1).'</span>';

                echo "<br>";
            }
            for ($i=$longitud-1;$i>=0;$i--){
                echo '<span style="color:'.$this->color.'; background-color:'.$this->color_fondo.';">'. substr($this->palabra,$i,1).'</span>'   ;
            }
        }
    
}
