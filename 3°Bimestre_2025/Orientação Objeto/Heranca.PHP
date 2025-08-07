<?php
    // Classe PAI
    class Pessoa {
        public $nome;
        public $tipo;

        public function mostrarTipo() {
            echo "$this->nome é do tipo $this->tipo <hr>";
        }

    }

    class PessoaComum extends Pessoa {
        public $cpf;
    }

    class Empresa extends Pessoa {
        public $cnpj;
    }
    $pessoa = new PessoaComum();
    $pessoa->nome = 'Felipe';
    $pessoa->tipo = 'Fisíca';
    
    $empresa = new Empresa();
    $empresa->nome = 'Software Bugado Lata';
    $empresa->tipo = 'Jurídica';

    $pessoa->mostrarTipo();
    $empresa->mostrarTipo();
?>