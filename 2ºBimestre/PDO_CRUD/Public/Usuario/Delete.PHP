<?php
    include '../../Config/Connection.PHP';
?>

<?php
    $id = isset($_GET['id']) ? $_GET['id'] : exit();
 
   if (empty($id)) {
    echo "É necessário informar o código";
    exit();
   }

   $stmt = $pdo->prepare('DELETE from  usuario WHERE id=:id');
   $stmt->bindParam(':id', $id);
   $stmt->execute();

   header("Location: Read.PHP");
?>