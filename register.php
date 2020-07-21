<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['Username']) && !empty($_POST['Password'])) {
    $sql = "INSERT INTO usuarios (Username, Password) VALUES (:Username, :Password)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(':Username', $_POST['Username']);
    $Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
    $stmt->bind_param(':Password', $Password);
    if ($stmt->execute()) {
      $message = 'Usuario creador';
    } else {
      $message = 'No se pudo crear';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  <link rel="icon" href="<?php echo($favicon)?>" sizes="32x32">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrate</h1>

    <form action="register.php" method="POST">
      <input name="Username" type="text" placeholder="Username">
      <input name="Password" type="password" placeholder="Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
