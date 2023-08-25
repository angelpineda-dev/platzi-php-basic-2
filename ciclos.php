<?php 
    $usuarios = array("Manuel", "Omar", "Pepito");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    
    <ul>
        <?php for($x =0; $x < 10; $x++): ?>
            <li>Este es mi usuario: <?= $x; ?></li>
        <?php endfor; ?>
    </ul>

    <h2>Lista de usuarios</h2>

    <ul>
        <?php foreach ($usuarios as $usuario): ?>
            <li>Este es el usuario: <?= $usuario?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>