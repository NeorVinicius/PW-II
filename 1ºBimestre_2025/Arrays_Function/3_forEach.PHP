<?php
    $Estacionamento = [
        'Fusca',
        'Uno',
        'Brasilia'
    ];
    foreach ($Estacionamento as $key => $value) {
        echo "<hr>";
        echo "<b>Veiculo" . $key . ": </b>" . $value;
    };

    $patio = [
        [
            'Nome' => 'Fusca',
            'Placa' => 'GTR550',
            'Foto' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj7pzCcEPVpu4CYEkB7rg4QFdXC3IL6KRxAnjJC_jbPsk61tPKJ_rckYUIZpmE7mMii_qSsgJVFIOu2S-tCyeMcoj1iDOw5m_FLjOj8W3p6o6ND6D-4I8KlcqBx9B_y2QVnLWtrdQhKdEra/s1600/tanner-foust-racing-eneos-rwb-beetle-620x411.jpg'
        ],
        [
            'Nome' => 'Uno',
            'Placa' => 'GTA360',
            'Foto' => 'https://image1.mobiauto.com.br/images/api/images/v1.0/243746551/transform/fl_progressive,f_webp,q_70,w_600'
        ],
        [
            'Nome' => 'Brasilia',
            'Placa' => 'DBM941',
            'Foto' => 'https://i.ytimg.com/vi/nl5bVHj0zfE/sddefault.jpg'
        ]
    ];

    foreach ($patio as $key => $value) {
        echo "<br>Veiculo:" . $value["Nome"];
        echo "<br>Placa:" . $value["Placa"];
        echo "<br><img src=' " . $value["Foto"]."'>";
        echo "<hr>";
    };
?>