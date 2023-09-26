<?php require_once('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php  
  if (isset($_GET['mensaje']) && $_GET['mensaje']=='guardado' ){
    echo '<h2> el usuario se guardo con exito </h2>';
  }else{
    echo '<h2>Errorrrr</h2>';
  }

  $mysql = new Conection();
  $query = 'SELECT * FROM usuarios';
  $resultado = $mysql->consultar($query);

?>

<table>
  <tr>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
  </tr>
  <?php while ($row = $resultado->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $row['nombre_usuario']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><?php echo $row['email']; ?></td>
    </tr>
  <?php }; ?>
</table>
</body>
</html>