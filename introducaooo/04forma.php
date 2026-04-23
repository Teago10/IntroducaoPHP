<?php

    abstract class Forma{

        public $tipoForma = 'Forma Abstrata';

        public function imprimirForma(){
            echo $this->tipoForma . 'área: ' . $this->calculaArea() . "<br>";
        }

        abstract public function calculaArea();
    }

    class Quadrado extends Forma{

        public $lado;


        public function __construct(float $varlado){
            
            $this-> tipoForma = 'Quadrado ';
            $this-> lado = $varlado;
        }

        public function calculaArea()
        {
            return $this->lado * $this->lado;
        }
    }

    $obj = new Quadrado(10.0);
    $obj->imprimirForma();

    class Retangulo extends Forma{

        public $base;
        public $altura;

        public function __construct(float $varbase, float $varaltura){

            $this-> tipoForma = 'Retângulo ';
            $this-> base = $varbase;
            $this-> altura = $varaltura;
        }

        public function calculaArea()
        {
            return $this->base * $this->altura;
        }

    }
    
    $objR = new Retangulo(10.0 , 20.0);
    $objR->imprimirForma();

?>