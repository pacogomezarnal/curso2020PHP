<?php

class Usuario{//Estoy es this

    //Propiedades o variables
    public $nombre="Paco";
    private $dni="22453079W";
    private $edad=0;

    //Método constructor
    public function __construct(){
        echo "Creado nuevo objeto Usuario";

    }

    //Métodos o funciones
    function mostrarNombre(){
        return $this->anyadirBr($this->nombre);
    }

    function mostrarDni(){
        return $this->dni . "<br>";
    }
    function modificarDni($nuevoValor){
        $this->dni=$nuevoValor;
    }

    function mostrarEdad(){
        return $this->edad . "<br>";
    }

    function modificarEdad($nuevaEdad){
        if($nuevaEdad<0){
            $this->edad=0;
        }else{
            $this->edad=$nuevaEdad;
        }
        
    }

    private function escribirHTML($texto){
        echo "<div>";
        echo $texto;
        echo "</div>";
    }

    private function anyadirBr($texto){
        return $texto."<br>";
    }
}