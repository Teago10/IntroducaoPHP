<?php

    class poupanca extends conta{

        private float $reajuste;

        public function __construct(string $agencia, string $conta, float $saldoInicial, float $reajuste)
        {
            parent::__construct('POUPANCA', $agencia, $conta);
            $this-> deposito($saldoInicial);
            $this-> reajuste = $reajuste;
        }

        public function calculaSaldo()
        {
            return $this->saldo() + ($this->saldo() * ($this->reajuste / 100.0));
        }
    }
?>