<?php

require("mailer.php");

function validate_form_fields($name, $email, $subject, $message, $form)
{
    return !empty($name) || !empty($email) || !empty($subject) || !empty($message);
}
;

$status = "";

if (isset($_POST['form'])) {

    if (validate_form_fields(...$_POST)) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body = "$name <$email> te envia el siguiente mensaje: <br/><br/>
        $message";

        // send email

        sendMail($subject, $body , $email, $name, true);

        $status = "success";

    }else {
        $status = "danger";
    }
}
;


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Formulario de contacto</title>
</head>

<body>

    <?php if ($status == "success"): ?>
        <div class="alert success">
            <span>¡Mensaje enviado con exito!</span>
        </div>

    <?php endif; ?>

    <?php if ($status == "danger"): ?>
        <div class="alert danger">
            <span>Surgio un problema</span>
        </div>
    <?php endif; ?>



    <section>
        <form action="./formulario.php" method="POST">
            <div class="input-group">
                <label for="name">Nombre</label>
                <input id="name" name="name" type="text" placeholder="Nombre..." />
            </div>

            <div class="input-group">
                <label for="email">Correo</label>
                <input id="email" name="email" type="email" placeholder="Correo..." />
            </div>

            <div class="input-group">
                <label for="subject">Asunto</label>
                <input id="subject" name="subject" type="text" placeholder="Asunto..." />
            </div>

            <div class="input-group">
                <label for="message">Mesaje</label>
                <textarea id="message" name="message" placeholder="Mensaje..."></textarea>
            </div>

            <div class="button-container">
                <button type="submit" name="form">Enviar</button>
            </div>
        </form>
    </section>
</body>

</html>