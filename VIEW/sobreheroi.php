<?php 
	$heroi= @$_GET['n'];
	if($heroi == null) echo "<p>Heroi ".$heroi." não encontrado</p>";
	else echo "<p> SOBRE HEROI ".$heroi." </p>"; 
?>