<?php
require_once('db.php');

session_start();

if(isset($_SESSION['user'])){
  header("Location: index.php");
}

$errorList = [];

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $psw = $_POST['password'];

  if($email != "" && $psw != ""){
      
    //consulta para verificar si son validas las credenciales
    $resultado = $mbd->prepare('SELECT * FROM usuarios WHERE email = :email');

    $resultado->execute([':email' => $email]);
    $exists = $resultado->rowCount();

    if($exists != 0){

      //consulta par aobtener contra antes de compararlas
      $resultado = $mbd->prepare('SELECT pass FROM usuarios WHERE email = :email');

      $resultado->execute([':email' => $email]);

      $user = $resultado->fetch();

      //print_r($user);
      if(password_verify($psw,$user['pass'])){

        $_SESSION['user'] = $email;

        $resultado = null;
        $mdb = null;

        header('Location: index.php');
        exit;
      }
    }else{
      
      $errorList[] = "Usuario inválido";
    }
  }
}

if(isset($_GET["error"])){
  $errorList[] = $_GET["error"];
}

print_r($_SESSION['user']);

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
  <h1>LOGIN</h1>
  <form action="" method="post" class="login">
      <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?=$email?>">
        <input type="hidden" name="url" id="url" value="<?=$url?>">
      </p>

      <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="">
      </p>

      <?php if (count($errorList)>0) { ?>
      <p>
        <?php foreach($errorList as $error) { ?>
          <div class="error"><?= $error ?></div>
        <?php } ?>
      </p>
      <?php }?>

      <p class="login-submit">
        <label for="submit">&nbsp;</label>
        <button type="submit" name="submit" class="login-button">Login</button>
      </p>
  </form>
  <a href="signUp.php">Aun no tienes una cuenta? Crear una</a>
</body>
</html>