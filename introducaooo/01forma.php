<?php

    #Declaração da classe
    class Forma{

    #Declaração e atribuição do atributo
        public $tipoForma = 'Forma Abstrata';

        #Declaração do metodo
        public function imprimirForma(){
            echo $this->tipoForma;
        }
    }

    #instanciação da classe
    $obj = new Forma();

    #acessando o membro de uma classe
    $obj->imprimirForma();
?>