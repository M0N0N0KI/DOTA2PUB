<?php 
	$noticia= @$_GET['n'];
	if($noticia == null) echo "<p>Noticia ".$noticia." não encontrado</p>";
	else echo "<p> ATENÇÂO ".$noticia." </p>"; 
?>