<?php

declare(strict_types=1);

Class Produto
{       //atributos
    private string $nome;
    private float $valor;


        //metodos
        public function getNome(): string 
        {
            return $this->nome;
        }

            public function setNome(string $novoNome): void
            {
                $this->nome = $novoNome;
            }

            public function getValor(): float
            {
                return $this->valor;
            }

            public function setValor(float $novoValor): void
            {
                if ($novoValor <0){
                    die('ops, valor não pode ser negativo');
                }
                $this->valor = $novoValor;


            }
}

