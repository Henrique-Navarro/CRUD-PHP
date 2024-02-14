<?php
include 'includes/db.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$query = "SELECT * FROM product";
$result = mysqli_query($connection, $query);

echo "<div class='container'>";
echo "<h2>Lista de Registros:</h2>";
echo "<table class='table table-hover table-striped'>";

echo "<tr>";
echo "<th>#</th>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Valor</th>";
echo "<th>Ações</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $category = $row['category'];
    $value = $row['value'];

    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$name}</td>";
    echo "<td>{$icategoryd}</td>";
    echo "<td>{$value}</td>";

    echo "<td>
    <button onclick=\"location.href='update.php?id={$id}'\" class='btn btn-warning btn-sm'>Editar</button>
    <button onclick=\"location.href='delete.php?id={$id}'\" class='btn btn-danger btn-sm'>Excluir</button>
    <button onclick=\"location.href='read.php?id={$id}'\" class='btn btn-info btn-sm'>Visualizar</button>
    </td>";


    echo "</tr>";
}

echo "</table>";
echo "<a href='create.php'><button>Adicionar Novo Registro</button></a>";
echo "</div>";

mysqli_close($connection);
?>

</body>
</html>
