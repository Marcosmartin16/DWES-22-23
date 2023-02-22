<?php


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
        <label for="email">Username:</label>
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