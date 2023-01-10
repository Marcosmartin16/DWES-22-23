<!--<div class="menu">
  <a href="perfil.php" class="perfilA"><?php //print_r($nombre) ?></a>
  <a href="index.php">index</a>
  <a href="login.php" class="loginA">login</a>
  <a href="signUp.php" class="signUpA">sign up</a>
  <a href="logout.php" class="logoutA">exit</a>
</div>-->
<?php
  if(isset($_SESSION['user'])){ ?>
    <a href="perfil.php" class="perfilA"><?php print_r($nombre) ?></a>
    <a href="logout.php" class="logoutA">exit</a>
<?php }else{ ?>
    <a href="perfil.php" class="perfilA"><?php print_r($nombre) ?></a>
    <a href="login.php" class="loginA">login</a>
    <a href="signUp.php" class="signUpA">sign up</a>
<?php } ?>