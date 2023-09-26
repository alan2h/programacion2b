<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Alta</title>
    <style>
        .form_usuario {
            border: 1px solid;
            width: 17%;
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    <form class="form_usuario" action="controlador.php" method="post">
        <input type="text" name="nombre_usuario" id="">
        <br>
        <input type="password" name="password" id="">
        <br>
        <input type="email" name="email" id="">
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>_
</html>