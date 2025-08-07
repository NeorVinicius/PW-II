<?php
    include '../../Includes/Header.PHP';
    include '../../Includes/Menu.PHP';
    include '../../Config/Connection.PHP';
?>

<?php
    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuario = $stmt->fetchAll();

    // echo "<pre>";
    // echo var_dump($usuario);
?>
<?php foreach ($usuario as $indice => $user) {?>
    <p><strong>Nome:</strong><?php echo $user["username"]; ?></p>
    <a href="http://localhost/PW-II/2%C2%BABimestre/PDO_CRUD/Public/Usuario/Delete.PHP?id=<?php echo $user['id']; ?>">Remover</a>
    <a href="http://localhost/PW-II/2%C2%BABimestre/PDO_CRUD/Public/Usuario/Update.PHP?id=<?php echo $user['id']; ?>">Editar</a>

    <hr>
<?php } ?>

<?php  include '../../Includes/Footer.PHP';?>