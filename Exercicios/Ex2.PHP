<?php
$siga = [
    [
        'Nome' => 'Jegue',
        'Idade' => '16 Anos',
        'Peso' => '400 KG',
        'Cor' => 'Marrom',
        'Espécie' => 'Equus asinus',
        'Raça' => 'American Mammoth Donkey',
        'Foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnEbHVNujiFquMfl8TObD0rAJ20_X9z5RC0w&s'
    ],
    [
        'Nome' => 'cavalo',
        'Idade' => '15 Anos',
        'Peso' => '435 KG',
        'Cor' => 'Preto',
        'Espécie' => 'Equus ferus',
        'Raça' => 'Frísio',
        'Foto' => 'https://s2.glbimg.com/L4giqlYFvLvO4Cwj5xKBtEHSyMM=/e.glbimg.com/og/ed/f/original/2022/05/19/640px-friesian_stallion.jpg'
    ],
    [
        'Nome' => 'Gavião-Real',
        'Idade' => '22 Anos',
        'Peso' => '8,9 KG',
        'Cor' => 'Cinza',
        'Espécie' => 'Harpia harpyja',
        'Raça' => '...',
        'Foto' => 'https://animalbusiness.com.br/wp-content/uploads/2020/04/Harpia-Thumb.jpg'
    ],
    [
        'Nome' => 'Coruja-da-Igreja',
        'Idade' => '9 Anos',
        'Peso' => '535 g',
        'Cor' => 'Branca',
        'Espécie' => 'Tyto furcata',
        'Raça' => '...',
        'Foto' => 'https://static.mundoeducacao.uol.com.br/mundoeducacao/conteudo_legenda/91b5712982fb33788f10b5bdd9e8e815.jpg'
    ]
];

foreach ($siga as $key => $value) {
    echo "<br>Nome:" . $value["Nome"];
    echo "<br>Idade:" . $value["Idade"];
    echo "<br>Peso:" . $value["Peso"];
    echo "<br>Cor:" . $value["Cor"];
    echo "<br>Raça:" . $value["Raça"];
    echo "<br>Espécie:" . $value["Espécie"];
    echo "<br><img src=' " . $value["Foto"]."'>";
    echo "<hr>";
};
?>