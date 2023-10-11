<?php require_once('conection.php') ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $mysql = new Conection();
    $query = 'Select * from usuarios';
    $resultados = $mysql->consultar($query);
    ?>
    <table>
       <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Perfil</th>
        <th>Editar</th>
        <th>Eliminar</th>
       </tr>

        <?php while ($row = $resultados->fetch_assoc()) { ?>
            <tr>
                <th> <?= $row['username'] ?></th>
                <th><?= $row['email'] ?></th>
                <th><?= $row['Perfiles_id'] ?></th>
                <th><button type="button">Editar</button></th>
                <th><button type="button">Eliminar</button></th>
            </tr>
            
        <?php }; ?>    
    </table>
</body>
</html>