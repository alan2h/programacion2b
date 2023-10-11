<?php include_once('conection.php');  ?>
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
      $query = 'Select * from Perfiles';
      $resultados = $mysql->consultar($query);
    ?>
    <form action="controlador.php" method="post">
        <input type="text" name="username" id="id_username">
        <input type="password" name="password" id="id_password">
        <input type="email" name="email" id="id_email">
        <select name="perfil" placeholder="seleccione un perfil" >
            <?php while ($row = $resultados->fetch_assoc()){ ?>
             <option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>    
            <?php };?>
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>