<?php

    abstract class pessoa{

        private string $tipoInscricao;
        private string $numeroInscricao;

        public function __construct(string $numeroInscricao, string $tipoInscricao){
            $this-> tipoInscricao = $tipoInscricao;
            $this-> numeroInscricao = $numeroInscricao;
        }
        
        public function imprime(){
            echo $this-> tipoInscricao . '- ' . $this-> numeroInscricao . 'Renda: ' . $this-> calculaRenda();
        }

        abstract public function calculaRenda();
    }
?>