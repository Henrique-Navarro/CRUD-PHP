<?php
include 'includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $category = $_POST['category'];
        $value = $_POST['value'];

        $query = "UPDATE product SET name='$name', category='$category', value='$value' WHERE id = $id";
        mysqli_query($connection, $query);

        //header("Location: read.php?id=$id");
        header('Location: index.php');
        exit();
    }

    $query = "SELECT * FROM product WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Editar Registro</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container mt-4">
                <h2 class="mb-4">Editar Registro</h2>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" value="<?= $row['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="category">Categoria:</label>
                        <input type="text" class="form-control" name="category" value="<?= $row['category'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="value">Valor:</label>
                        <input type="text" class="form-control" name="value" value="<?= $row['value'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>
<?php
    } else {
        echo "Registro não encontrado.";
    }
} else {
    echo "ID do registro não fornecido.";
}

mysqli_close($connection);
?>
