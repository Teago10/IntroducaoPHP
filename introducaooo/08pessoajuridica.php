<?php

    class PessoaJuridica extends conta{

        private float $limiteEspecial;

        public function __construct(string $agencia, float $saldoInicial,string $conta, float $limiteEspecial)
        {
            parent::__construct('Especial', $agencia, $conta, $saldoInicial);

            $this->limiteEspecial = $limiteEspecial;
        }

        public function calculaSaldo()
        {
            return $this->saldo() + $this->limiteEspecial;
        }
    }
?>