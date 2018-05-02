<?php

require_once ("Persona.php");

class Pedido {
    var $fecha;
    var $importe;

    function __construct ($nombre,$edad,$fecha,$importe){

        $this->fecha= $fecha;
        $this->importe= $importe;
    }

    function getFecha (){
        return $this->fecha;
    }
    function setFecha ($fecha){
        $this->fecha = $fecha;
    }
    function getImporte (){
        return $this->importe;
    }
    function setImporte ($importe){
        $this->importe = $importe;
    }
   
    function mostrar () {
        parent::mostrar();
        echo $this->getFecha()." <br>";
        echo $this->getImporte()." <br>";
    }
}

?>