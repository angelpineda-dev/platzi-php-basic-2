<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando datos</title>
</head>
<body>

<form action="server.php" method="post" >
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name"/>

    <label for="username">Nombre de usuario</label>
    <input type="text" id="username" name="username"/>

    <label for="email">Correo</label>
    <input type="text" id="email" name="email"/>

    <label for="age">Edad</label>
    <input type="text" id="age" name="age"/>

    <button type="submit">Enviar</button>
</form>
    
</body>
</html>