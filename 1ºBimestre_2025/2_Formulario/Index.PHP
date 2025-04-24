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
            <legend>Informação do Personagem</legend>
            <label for="Nome">Nome</label>
            <input type="text" name="Nome" id="Nome" placeholder="Nome" require >

            <br>

            <label for="Poder">Poder</label>
            <input type="text" name="Poder" id="Poder" placeholder="Poder do Personagem" require>

            <br>

            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php

    if (ISSET($_GET['Nome'])) {
        if (empty($_GET['Nome'])) {
            echo '<br> Nome obrigatorio';
        }
    }
        else{
        echo $_GET['Nome'];
        }
    if (ISSET($_GET['Poder'])) {
        
    if (empty($_GET['Poder'])) {
            echo '<br> Poder obrigatorio';
        }
    }
        else {
        echo $_GET['Poder'];
    }
    
    ?>
</body>
</html>