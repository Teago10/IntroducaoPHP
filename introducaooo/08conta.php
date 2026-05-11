<?php

    abstract class conta{

        private string $tipoDeConta;
        private string $agencia;
        private string $conta;
        private float $saldo;

        private array $movimentacao = [];

        public function __construct(string $tipoDeConta, string $agencia, string $conta, float $saldoInicial = 0.00){
            $this->tipoDeConta = $tipoDeConta;
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->saldo = $saldoInicial;
        }

        public function imprimeExtrato(){
            echo 'Conta:' . $this->tipoDeConta. ' Agência: ' . $this->agencia . ' Conta: ' . $this->conta . ' Saldo: ' . $this->calculaSaldo() . "<br>";

            foreach($this-> movimentacao as $itemExtrato){
                echo "<br>". $itemExtrato-> imprimirItem();
            }
        }

        public function deposito(float $valor){
            $this->saldo += $valor;
            $this-> incluiMovimentacao(new itemExtrato("Déposito", $valor) );
        }

        public function saque(float $valor){
            $this->saldo -= $valor;
        }

        public function saldo(){
            return $this->saldo;
        }

        public function incluiMovimentacao(itemExtrato $item){
            $this-> movimentacao[] = $item;
        }

        abstract protected function calculaSaldo();
    }
?>