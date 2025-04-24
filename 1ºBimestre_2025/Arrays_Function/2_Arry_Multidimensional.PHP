<?php
    $pessoa1 = [];
    
    $pessoa1 ['Nome'] = 'Ana';
    $pessoa1 ['Sobrenome'] = 'Cleto';
    $pessoa1 ['Idade'] = 56;
  
    $pessoa2 = [];
    
    $pessoa2 ['Nome'] = 'Diogo';
    $pessoa2 ['Sobrenome'] = 'Paulino';
    $pessoa2 ['Idade'] = 25;

    $lista_pessoas = 
    [
        $pessoa1,
        $pessoa2
    ];

    echo "<h1>O nome é: " . $lista_pessoas[0] ['Nome'] . "</h1>";
?>