<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Archivos</title>
</head>

<body>
    <form action="server-archivos.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" />

        <label for="image">Image</label>
        <input type="file" name="image" id="image" />

        <button type="submit">Enviar formulario</button>

    </form>
</body>

</html>