<?php
$siga = [
    [
        'Nome' => 'Fernando',
        'Telefone' => '44925-9874',
        'RM' => '6462516',
        'Foto' => 'https://cdni.iconscout.com/illustration/premium/thumb/professor-indio-como-super-heroi-2660479-2227246.png?f=webp'
    ],
    [
        'Nome' => 'Guilherme',
        'Telefone' => '97854-9871',
        'RM' => '5446548',
        'Foto' => 'https://em-content.zobj.net/source/emojipedia/113/man-curly-haired_1f468-200d-1f9b1.png'
    ],
    [
        'Nome' => 'Leonardo',
        'Telefone' => '89754-1245',
        'RM' => '9751678',
        'Foto' => 'https://media.tenor.com/FxpapDMA5w0AAAAe/eggman-dr-robotnik.png'
    ],
    [
        'Nome' => 'Victor',
        'Telefone' => '87985-9941',
        'RM' => '1010649',
        'Foto' => 'https://conteudo.imguol.com.br/c/esporte/9a/2024/07/28/pedro-beija-escudo-do-flamengo-apos-marcar-gol-1722210762191_v2_450x600.jpg'
    ]
];

foreach ($siga as $key => $value) {
    echo "<br>Nome:" . $value["Nome"];
    echo "<br>RM:" . $value["RM"];
    echo "<br>Telefone:" . $value["Telefone"];
    echo "<br><img src=' " . $value["Foto"]."'>";
    echo "<hr>";
};
?>