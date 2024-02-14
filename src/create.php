<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $value = $_POST['value'];

    $query = "INSERT INTO product (name, category, value) VALUES ('$name', '$category', '$value')";
    mysqli_query($connection, $query);

    header('Location: index.php'); 
    exit();
}
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



<div class="container">
    <h2>Criar Novo Registro</h2>
    <form method="post" action="">
        <div class="mb-3">
            <label>Name:</label> 
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Category:</label>
            <input type="text" name="category" class="form-control">
        </div>

        <div class="mb-3">
            <label>Value:</label>
            <input type="number" name="value" class="form-control">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        
    </form>
</div>
<?php mysqli_close($connection); ?>

</body>
</html>