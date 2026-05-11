<?php

    class especial extends conta{

        private float $limiteEspecial;

        public function __construct(string $agencia,string $conta, float $saldoInicial, float $limiteEspecial)
        {
            parent::__construct('ESPECIAL', $agencia, $conta);
            $this-> deposito($saldoInicial);
            $this->limiteEspecial = $limiteEspecial;
        }

        public function calculaSaldo()
        {
            return $this->saldo() + $this->limiteEspecial;
        }
    }
?>