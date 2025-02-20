<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução</title>
</head>
<body>

    <!--  method="post" Não mostra a informação -->
    <form action="Index.PHP" method="get">
        <fieldset>
            <legend>Calculadora</legend>
            <label for="Numero1">Numero 1</label>
            <input type="number" name="Numero1" id="Numero1" placeholder="0" require >

            <br>

            <label for="Numero2">Numero 2</label>
            <input type="number" name="Numero2" id="Numero2" placeholder="0" require>

            <br>

            <input type="submit" value="Calcular">
        </fieldset>
    </form>

    <?php

    if (ISSET($_GET['Numero1'])) {
        if (empty($_GET['Numero1'])) {
            echo '<br> Valor obrigatorio';
        }
    }else {
        exit();
    }

    if (ISSET($_GET['Numero2'])) {  
        if (empty($_GET['Numero2'])) {
            echo '<br> Valor obrigatorio';
        }
    }else {
        exit();
    }
    echo $_GET['Numero1'] + $_GET ['Numero2'];    
    
    ?>
</body>
</html>