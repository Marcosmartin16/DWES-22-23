<?php 
    $hasta = 10; 
?>

<html>
    
    <head>TABLA DEL 5</head>
    
    <body>
        
	<table border = "2px">
	    
		<thead>
			<tr>
			    
				<td>Tabla</td>
				
			</tr>
			
		</thead>
		
		<tbody>
			<?php for($i = 0; $i <= $hasta; $i++) { ?>
				<tr>
					<td> <?php echo $i ?> </td>
					<?php if ($i == 0): ?>
					    <?php for($j = 0; $j < $hasta; $j++) { ?>
                            <td> <?php echo $j + 1 ?> </td>
                        <?php } ?>
					<?php else: ?>
    					    <?php for($j = 1; $j <= $hasta; $j++) { ?>
                                <?php if (($i * $j) % 2 == 0): ?>
                                    <td> <b><?php echo $i * $j ?> </b></td>
                                <?php else: ?>
                                   <td><?php echo $i * $j ?> </td>
                                <?php endif; ?>
                                
                            <?php } ?>
					<?php endif; ?>
				</tr>
			<?php } ?>
		</tbody>
	</table>
    </body>
</html>
