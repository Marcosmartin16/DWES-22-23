<?php

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
  <h1 class="loginTitulo">LOGIN</h1>
  <form action="" method="post" class="login">
      <p>
        <label for="email">Username:</label>
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