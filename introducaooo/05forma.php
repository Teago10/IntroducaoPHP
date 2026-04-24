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


    class Retangulo extends Forma{

        public $base;
        public $altura;

        public function __construct(float $base, float $altura){

            $this-> tipoForma = 'Retângulo ';
            $this-> base = $base;
            $this-> altura = $altura;
        }

        public function calculaArea()
        {
            return $this->base * $this->altura;
        }

    }

    class Triangulo extends Forma{

        public $cumprimentoBase;
        public $altura;

        public function __construct(float $cumprimentoBase, float $altura)
        {
            $this-> tipoForma = 'Triângulo';
            $this-> cumprimentoBase = $cumprimentoBase;
            $this-> altura = $altura;
        }

        public function calculaArea()
        {
            return ($this->altura * $this->cumprimentoBase)/2;
        }
    }
    
    $objQ = new Quadrado(10.0);
    $objQ->imprimirForma();

    $objR = new Retangulo(10.0 , 20.0);
    $objR->imprimirForma();

    $objT = new Triangulo(14.0 , 4);
    $objT->imprimirForma();

?>