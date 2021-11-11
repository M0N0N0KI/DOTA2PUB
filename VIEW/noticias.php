<?php 
	$noticia= @$_GET['n'];
	if($noticia == null) echo "<p class='label-branco'>Noticia ".$noticia." não encontrado</p>";
	else echo "<p class='label-branco'> ATENÇÂO ".$noticia." </p>"; 
?>