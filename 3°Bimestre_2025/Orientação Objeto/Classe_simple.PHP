<?php
    class Pessoa {
        // Opções de Encapsulamento
        // Public- A variável é acessível de fora da classe
        // Private - É acessível somente dentro da classe
        // Protected - É acessível somente por herança
        public $nome;
        public $idade;

        public function apresentar() {
            echo "Olá, meu nome é $this->nome";
            echo "<hr>";
            echo "Tenho $this->idade anos";
        }
    }

    $aluno1 = new Pessoa();
    $aluno1->nome = 'Jorge';
    $aluno1->idade = 19;
    $aluno1->apresentar();

    $aluno2 = new Pessoa();
    $aluno2->nome = 'Maria';
    $aluno2->idade = 21;
    $aluno2->apresentar();
?>