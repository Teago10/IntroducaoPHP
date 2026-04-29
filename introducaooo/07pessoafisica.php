<?php

    class pessoaFisica extends pessoa{

        public int $diasTrabalhados;
        public float $salario;

        public function __construct(string $numeroCPF, int $diasTrabalhados, string $salario)
        {
            parent:: __construct("CPF", $numeroCPF); //sempre que eu precisar acessa algo da classe pai é utilizado parent
            $this-> diasTrabalhados = $diasTrabalhados;
            $this-> salario = $salario;
        }

        public function calculaRenda()
        {
            return $this-> diasTrabalhados * $this-> salario;
        }
    }
?>