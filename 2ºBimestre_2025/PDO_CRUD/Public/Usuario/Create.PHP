<?php
    include '../../Includes/Header.PHP';
    include '../../Includes/Menu.PHP';
    include '../../Config/Connection.PHP';?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-4 p-4 border shadow rounded">

                 <form action="Create.PHP" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nome de Usuário</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
                 
            </div>
        </div>
    </div>

   

<?php
    $username = isset($_POST['username']) ? $_POST['username'] : exit();
    $password = isset($_POST['password']) ? $_POST['password'] : exit();

    $stmt = $pdo->prepare('INSERT INTO usuario(username, password) VALUES(:username, :password)' );
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    header("Location: Read.PHP");
?>

<?php  include '../../Includes/Footer.PHP';?>