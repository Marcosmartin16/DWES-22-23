<?php

require("../src/init.php");

$title = "Listado";
$pageHeader = "Listado";
$pageId = "Listado";

$content = "Esto es el contenido";

//obtiene info del modelo
$DB->ejecuta("SELECT * FROM usuarios");
$usuarios = $DB->obtenDatos();

//se lo pasa al template
ob_start();
?>

<table>

    <tr><td>Nombre</td><td>Foto</td></tr>
    
    <?php foreach($usuarios as $usuario) { ?>
        <tr>
            <td><?= $usuario['nombre'] ?></td>
            <td><img src="<?= $usuario['img']?>" alt=""></td>
        </tr>
    <?php } ?>

</table>

<?php

$content = ob_get_clean();

require("template.php");

?>