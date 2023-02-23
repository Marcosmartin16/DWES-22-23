<?php

require_once('./../src/init.php');

if (isset($_SESSION['username']) && $_SESSION['username']) {
  header('Location: index.php');
  die();
}

if (isset($_COOKIE['recuerdame'])) {

  $recuerdame = $_COOKIE['recuerdame'];

  $DB->ejecuta('SELECT * FROM tokens WHERE valor = ?', $recuerdame);
  $datos = $DB->obtenDatos();

  $idUsuario = $datos[0]['id_usuario'];

  $DB->ejecuta('SELECT * FROM usuarios WHERE id = ?', $idUsuario);
  $datos = $DB->obtenDatos();

  $_SESSION['username'] = $datos[0]['username'];
}

if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username != ""& $password != "") {

    $DB->ejecuta('SELECT * FROM usuarios WHERE username = ?', $username);
    $datos = $DB->obtenDatos();

    if (empty($datos)) {
      echo "el nombre de usuario no esta aun registrado";
    } else {
      if (password_verify($password, $datos[0]['pass'])) {

        $_SESSION['username'] = $username;
        $_SESSION['id'] = $datos[0]['id'];

        if (isset($_POST['recuerdame'])) {

          $token = bin2hex(openssl_random_pseudo_bytes($CONFIG['LONG_TOKEN']));

          $DB->ejecuta('INSERT INTO tokens(id_usuario, valor) VALUES (?,?)', $_SESSION['id'], $token);
          $insertado = $DB->getExecuted();

          if ($insertado) {

            setcookie("recuerdame", $token, [
              "expires" => time() + 7 * 24 * 60 * 60,
              "httponly" => true
            ]);

            header('Location: index.php');
            die();

          } else {
            echo "no ha sido posible recordarte vuelva a intentarlo";
          }

        } else {
          header('Location: index.php');
          die();
        }
      } else {
        echo "contraseña incorrecta";
      }
    }
  } else {
    echo "rellene todos los campos";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    USERNAME: <input type="text" name="username" id="username"><br>
    PASSWORD: <input type="password" name="password" id="password"><br>
    Recuerdame:<input type="checkbox" name="recuerdame" id=""><br>
    <input type="submit" value="LOG IN" name="login"><br>
    <a href="signUp.php">SIGN UP</a>
  </form>
</body>

</html>