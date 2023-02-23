<?php

require_once('./../src/init.php');


if(isset($_SESSION['grupo'])){

  $DB->ejecuta('SELECT * FROM grupos WHERE id = ?', $_SESSION['grupo']);
  $datos = $DB->obtenDatos();
  $nombreGrupo = $datos[0]['nombre'];

  if($nombreGrupo == 'lusers'){
    echo "<div class='menu'>
      <a href='index.php'>Inicio</a>
      <a href='login.php'>Login</a>
      <p>" . $_SESSION['username'] . " grupo: " . $nombreGrupo ."</p>
    </div>";
  }else if($nombreGrupo == 'profesionales'){
    echo "<div class='menu'>
      <a href='index.php'>Inicio</a>
      <a href='privado.php'>Privado</a>
      <a href='logout.php'>Logout</a>
      <p>" . $_SESSION['username'] . " grupo: " . $nombreGrupo ."</p>
    </div>";
  }else if($nombreGrupo == 'admin'){
    echo "<div class='menu'>
      <a href='index.php'>Inicio</a>
      <a href='admin.php'>Admin</a>
      <a href='privado.php'>Privado</a>
      <a href='login.php'>Login</a>
      <a href='logout.php'>Logout</a>
      <p>" . $_SESSION['username'] . " grupo: " . $nombreGrupo ."</p>
    </div>";
  }
}else{
  echo "<div class='menu'>
      <a href='index.php'>Inicio</a>
      <a href='login.php'>Login</a>
      <p>ANONYMOUS</p>
    </div>";
}


?>

