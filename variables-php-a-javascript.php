<?php
$usuarios = array(
    array(
        "id" => 0,
        "username" => 'Mr.Michi'
    ),
    array(
        "id" => 1,
        "username" => 'Retax'
    ),
    array(
        "id" => 2,
        "username" => 'Pancho'
    ),
);

$edad_de_pepito = 18;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a JavaScript</title>
</head>

<body>

<div id="edad">

</div>


    <script>
        let usuarios = JSON.parse('<?= json_encode($usuarios); ?>');
        let edadDePepito = JSON.parse('<?= json_encode($edad_de_pepito); ?>');
        let $edad = document.getElementById('edad');

        $edad.innerText = `La edad de Pepito es: ${edadDePepito}`;

        console.log(usuarios);


    </script>

</body>

</html>