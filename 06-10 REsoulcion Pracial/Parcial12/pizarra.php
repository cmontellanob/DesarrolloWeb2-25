<?php
class Pizarra{
     var $palabra, $color, $color_fondo;

    function __construct($palabra, $color, $color_fondo) {
        $this->palabra = $palabra;
        $this->color = $color;
        $this->color_fondo = $color_fondo;
    }
        function Diagonal(){
            $longitud= strlen($this->palabra);
            echo '<table>';
            for ($i=0;$i<$longitud;$i++){
                echo '<tr>';
                for($j=0;$j<$longitud;$j++){
                    if($i==$j){
                        echo '<td style="color:'.$this->color.'; background-color:'.$this->color_fondo.';">'. substr($this->palabra,$i,1).'</td>';
                    } else {
                        echo '<td>&nbsp;&nbsp;&nbsp;</td>';
                    }
                }
                echo '</tr>';
            }
            echo '</table>';
        }
    
}
