<?php
require_once('db.php');

session_start();

$errorList = [];

if(isset($_POST['submit'])){
  
  //numero de usuarios totales
  $resultado = $mbd->query('SELECT * FROM usuarios');
  $count = $resultado->rowCount();
  $resultado->execute();

  $email = $_POST['email'];

  if($_POST['email'] != "" && $_POST['password'] != ""){
    
    //usuarios que existen con ese nombre
    $resultado = $mbd->prepare("SELECT * FROM usuarios WHERE email = :email");

    $resultado->execute([':email' => $email]);
    $exists = $resultado->rowCount();

    //echo $exists;

    if($exists == 0){
      $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
      //si todo va bien hace esto
      $resultado = $mbd->prepare('INSERT INTO usuarios VALUES (:id,:email,:psw)');
  
      $resultado->bindValue(':id',$count+1);
      $resultado->bindValue(':email',$_POST['email']);
      $resultado->bindValue(':psw', $passwordHash);
      $resultado->execute();

      $resultado = null;
      $mdb = null;

      header('Location: login.php');
      exit;
    }else{
      $errorList[] = "Usuario existente";
    }
  }
}

if(isset($_GET["error"])){
  $errorList[] = $_GET["error"];
}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
  <h1>SIGN UP</h1>
  <form action="signUp.php" method="post" class="login">
      <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?=$_POST['email']?>">
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
        <button type="submit" name="submit" class="login-button">Sign up</button>
      </p>
  </form>
  <a href="login.php">Ya tienes una cuenta? Ingresa con ella</a>
</body>
</html>