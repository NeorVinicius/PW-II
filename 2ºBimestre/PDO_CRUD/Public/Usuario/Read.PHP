<?php
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
    <hr>
<?php } ?>
<?php
    foreach ($usuario as $indice => $user) {
        echo "<h1>" . $user["username"] . "</h1>";
        echo "hr";
    }
?>

