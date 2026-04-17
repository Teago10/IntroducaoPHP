<?php

    #Declaração da classe
    abstract class Forma{

    #Declaração e atribuição do atributo
        public $tipoForma = 'Forma Abstrata';

        


        #Declaração do metodo
        public function imprimirForma(){
            echo $this->tipoForma . 'com Área:' . $this->calculaArea();
        }

        #Calcula area
        abstract public function calculaArea();
    }

    #criando uma herança da classe base Forma e a 
    #filha Quadrado
    class Quadrado extends Forma{

        #declarando o atributo
        public $lado;


        #declaração do construtor
        public function __construct(float $varlado){
            
            $this-> tipoForma = 'Quadrado ';
            $this-> lado = $varlado;
        }

        #Implementando o metodo abstract da classe base
        public function calculaArea()
        {
            return $this->lado * $this->lado;
        }
    }

    # instancia da classe concreta
    $obj = new Quadrado(10.0);

    #atribuir o valor do atributo
    #$obj-> lado = 10;

    #acessando o membro de uma classe
    $obj->imprimirForma();
?>