<?php $palabras = array(
    'Agua',
    'Tamales',
    'Bonafon'
) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>
    <h1>Imrpimiendo texto con PHP</h1>

    <?= "Las siguientes son palabras guardadas en un array" ?>
    <ul>
        <?php 
            foreach ($palabras as $palabra) {
                echo "<li>$palabra</li>";
            };
        ?>
    </ul>
</body>
</html>