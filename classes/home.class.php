<?php

    include "autoload.php";

    class Home {

        public function montarPagina(){

            $html = new Html('pt-br');

            $head = new Head();
            $html->addElemento($head);
            
            $meta1 = new Meta('UTF-8', null, null, null);
            $meta2 = new Meta(null, 'X-UA-Compatible', 'IE=edge', null);
            $meta3 = new Meta(null, null, 'width=device-width, initial-scale=1.0', 'viewport');
            $head->addElemento($meta1);
            $head->addElemento($meta2);
            $head->addElemento($meta3);

            $title = new Title('Trabalho - Desenvolvimento Web II');
            $head->addElemento($title);
            
            $body = new Body();
            $html->addElemento($body);

            $ul = new Ul();
            $body->addElemento($ul);
            $ul->addElemento(new Li("Programação Web II"));
            $ul->addElemento(new Li("Estrutura de Dados"));

            $ol = new Ol();
            $body->addElemento($ol);
            $ol->addElemento(new Li("Julia Salvador"));
            $ol->addElemento(new Li("Mariana Dircksen"));
        
            echo $html;
   
        }
    }

?>