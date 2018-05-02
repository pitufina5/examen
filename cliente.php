<?php



require_once("persona.php");
require_once("pedido.php");

class Cliente extends Persona {
    var $pedidos; 

    function __construct ($nombre, $edad, $pedidos) {
        parent::__construct ($nombre, $edad);
        $this->pedidos = array ();

    }

   



    public function
    function mostrar () {
        parent::mostrar();

    
        for ($i=0; $i < count ($this->pedidos); $i++) { 
                $this->pedidos[$i]->mostrar();

        }

    }

}



?>