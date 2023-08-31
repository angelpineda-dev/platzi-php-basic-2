<?php
/* echo "<pre>";
var_dump($_POST);
echo "</pre>"; */

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];

$name = htmlentities($name);

$username = addslashes($username);

$only_words = preg_replace("/\d/", "", $username);
$only_numbers = preg_replace("/\D/", "", $username);

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitaze_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>
<body>
    <h3>Nombre</h3>
    <p><?=$name?></p>

    <h3>Nombre de usuario</h3>
    <p><?=$username?></p>

    <h3>Correo</h3>
    <p><?=$email?></p>

    <h3>Edad</h3>
    <p><?=$age?></p>
    <p><?= $sanitaze_int ?></p>

    <hr/>

    <h3>Solo letras</h3>
    <p><?= $only_words ?></p>
    
    <h3>Solo numeros</h3>
    <p><?= $only_numbers ?></p>
</body>
</html>