<?php
include 'includes/db.php';
?>

<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Detalhes do Registro</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
</head>
<body>
    <div class='container'>
    <h2>Detalhes do Registro</h2>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM product WHERE id = $id";
    $result = mysqli_query($connection, $query);


    if ($row = mysqli_fetch_assoc($result)) {
        echo "<p><strong>ID:</strong> {$row['id']}</p>";
        echo "<p><strong>Name:</strong> {$row['name']}</p>";
        echo "<p><strong>Category:</strong> {$row['category']}</p>";
        echo "<p><strong>Value:</strong> R${$row['value']}</p>";

        echo "<a href='index.php' class='btn btn-primary'>Voltar</a>";
    } else {
        echo "<p>Registro não encontrado.</p>";
    }

    echo "</div>
            </body>
        </html>";

    mysqli_close($connection);
} else {
    echo "ID do registro não fornecido.";
}

?>
