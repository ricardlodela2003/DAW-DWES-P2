<?php
class triangulo{
    function __construct($cateto){
        $this->cateto = $cateto;
    }
    function sacaTriangulo(){
        for($i = 1; $i <= $this->cateto; $i++){
            $escrito = 1;
            echo "*";
            while($escrito < $i){
                echo "*";
                $escrito++;
            }
            echo "<br/>";
        }
        for($i = $this->cateto; $i >= 1; $i--){

            $escritoInf = 1;
            while($escritoInf < $i){
                echo "*";
                $escritoInf++;
            }
            echo "<br/>";
        }
    }
}
$cateto = 10;
$triangulo = new Triangulo($cateto);
$triangulo->sacaTriangulo();



?>