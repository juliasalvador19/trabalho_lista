<?php
include_once "autoload.php";

    class Ol {
        private $listaElementos = [];
       
        function addElemento($elemento) {
            $this->listaElementos[] = $elemento;
        }
       
        function __toString() {
            $ol = "<ol>";
            foreach($this->listaElementos as $iListaElementos){
                $ol .= $iListaElementos;
            }
            $ol .= "</ol>";
            return $ol;
        }
    }