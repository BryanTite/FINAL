<?php

    include_once "producto.php";

    class Platos extends Producto{
        
        public function __construct($id, $img, $nom, $precio){
            parent::__construct($id, $img, $nom, $precio);
        }

        
    }

?>