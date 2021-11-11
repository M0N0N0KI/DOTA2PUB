<?php 
	$heroi= @$_GET['n'];
	if($heroi == null) echo "<p class='label-branco'>Heroi ".$heroi." não encontrado</p>";
	else echo "<p class='label-branco'> SOBRE HEROI ".$heroi." </p>"; 
?>