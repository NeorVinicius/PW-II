<?php
    include '../../Config/Connection.PHP';
?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = isset($_GET['id']) ? $_GET['id'] : exit();
     
        if (empty($id)) {
            echo "O id é obrigatório!";
            exit();
        }

        $stmt = $pdo->prepare('SELECT * from usuario WHERE id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $usuario = $stmt->fetchAll();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $username = isset($_POST['username']) ? $_POST['username'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;

        if (empty($id)) {
            echo "O id é obrigatório!";
            exit();
        }
        if (empty($username)) {
            echo "O nome é obrigatório!";
            exit();
        }
        if (empty($password)) {
            echo "Favor digitar a senha!";
            exit();
        }   
        
        $stmt = $pdo->prepare('UPDATE usuario SET username = :username, password = :password WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        Header('Location: Read.PHP');
    
    }

?>

    <form action="Update.PHP" method="POST">

    <input type="hidden" name="id" value="<?php echo $usuario[0]['id'];?> ">

    <label for="username">Nome de Usuário</label>
    <input type="text" name="username" id="username" value="<?php echo $usuario[0]['username']; ?>">
    <br><br>
    <label for="password">Senha</label>
    <input type="password" name="password" id="password">
    <br><br>
    <button type="submit">Atualizar</button>
    </form>