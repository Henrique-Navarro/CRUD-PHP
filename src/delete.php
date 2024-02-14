<?php
include 'includes/db.php';

// Verificar se o ID do registro está presente na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM product WHERE id = $id";
    mysqli_query($connection, $query);

    header('Location: index.php');
} else {
    echo "ID do registro não fornecido.";
}

// Fechar a conexão
mysqli_close($connection);
?>
