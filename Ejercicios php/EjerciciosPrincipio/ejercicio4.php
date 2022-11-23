Modifica el ejercicio anterior para que escriba la parte "Esta página..." en cursiva y "" 
en cursiva y negrita. NOTA: Puedes utilizar el operador "." para concatenar la salida

*****************************************************************************************

<?php
    $hola = "Hola Mundo!";
    $nombre = "Marcos";
?>
<html>
    <body>
        
	<p><?=$hola ?></p>
	</p><i>Esta pagina a sido programada por <b><?= $nombre ?></b></i></p>
	
    </body>
</html>

**************************
FORMA OPTIMA XD
**************************

<?php
    $hola = "hola mundo";
	$nombre = "Marcos";
?>
<html>
    <body>
        
	<?php echo $hola ?>  <i><?php echo " Esta pagina a sido programada por " ?></i>  <i><b><?php echo "Marcos" ?></b></i>
	
    </body>
</html>