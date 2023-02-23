<?php

require_once('./../src/init.php');

if(!isset($_SESSION['username'])){

  header('Location: login.php?redirect=privado.php');
  die();
}



?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>
<p>Información solo para gente autentificada</p>
</body>
</html>
