<?php

require_once('./../src/init.php');

$error = "";
$email = "";
$password = "";

if(isset($_POST['submit'])){

  $email = $_POST['login'];
  $password = $_POST['password'];

  if($email != "" && $password != ""){

    $DB->ejecuta('SELECT * FROM usuarios WHERE nombre = ?', $email);
    $datos = $DB->obtenDatos();

    if(!empty($datos)){

      if (password_verify($password, $datos[0]['secreto'])) {

        $_SESSION['username'] = $email;

        if(isset($_GET['redirect'])){
          $redirect = $_GET['redirect'];
          header("Location: ".$redirect);
          die();
        }else{
          header('Location: index.php');
          die();
        }
      }else{
        $error = "contraseña incorrecta";
      }
    }else{
      $error = "usuario incorrecto";
    }
  }else{
    $error = "rellene todos los campos";
  }
}



function pintarError($error){

  if(empty($_POST)){
    $error = "";
  }else{
    echo $error;
  }
}


?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>
<form action="" method="post" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="login" id="login" value="<?= $email ?>">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <p>
        <div class="error"><?php pintarError($error) ?></div>
    </p>

    <p class="login-submit">
      <label for="submit">&nbsp;</label>
      <button type="submit" name="submit" class="login-button">Login</button>
    </p>
</form>
</body>
</html>