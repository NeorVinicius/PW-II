<?php
    /*
        Crie um array no qual irá conter 4 pessoas (nome, idade).
        Faça um foreach para exibir cada uma das pessoas,e exiba se a pessoa pode votar ou não.
        Idade maior que 70 voto opicional.
        Idade menor que 16 não pode votar.
        Idade entre 18 e 70 obrigatorio.
        Idade entre 16 e 17 voto opicional.
    */

    $nome = [
        [   'nome' => 'Maria Barboza',
            'idade' => 75
        ],
        [
            'nome' => 'Diogo Cleto',
            'idade' => 25
        ],
        [
            'nome' => 'Pedro Silva',
            'idade' => 16
        ],
        [
            'nome' => 'Leonardo Oliveira',
            'idade' => 15
        ]
    ];

    verificarVotacao($nome);

    function  verificarVotacao($nome) {
        foreach ($nome as $key => $votacao) {
        
            if ($votacao ['idade'] < 16 ) {
            echo $votacao['nome'] . ' NÃO PODE VOTAR';
            }
            elseif($votacao ['idade'] >= 16 && $votacao ['idade'] <18 ) {
            echo $votacao['nome'] . ' VOTO OPICIONAL';
            }
            elseif($votacao ['idade'] >= 18 && $votacao ['idade'] < 71 ) {
            echo $votacao['nome'] . ' VOTO OBRIGATORIO';
            }
            elseif($votacao ['idade'] >= 71 && $votacao ['idade'] < 120 ) { 
            echo $votacao['nome'] . ' VOTO OPICIONAL';
            }
        
        echo '<br>';
        } 
    }
?>