<?php

require_once('./../src/init.php');

if(isset($_SESSION['username']) && $_SESSION['username'] != 'admin'){

  header("Location: login.php?redirect=admin.php");
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
<p>Información solo para admin</p>
</body>
</html>
