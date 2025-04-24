<?php
    include '../../Config/Connection.PHP';

    ?>

    <form action="Create.PHP" method="POST">
    <label for="username">Nome de Usuário</label>
    <input type="text" name="username" id="username">
    <br><br>
    <label for="password">Senha</label>
    <input type="password" name="password" id="password">
    <br><br>
    <button type="submit">Cadastrar</button>
    </form>

<?php
    $username = isset($_POST['username']) ? $_POST['username'] : exit();
    $password = isset($_POST['password']) ? $_POST['password'] : exit();

    $stmt = $pdo->prepare('INSERT INTO usuario(username, password) VALUES(:username, :password)' );
?>