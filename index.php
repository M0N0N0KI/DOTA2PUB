<!DOCTYPE html>
<?php
	$pagina = @$_GET['p'];
	if($pagina == null)$pagina = 'home';
	if($pagina == "sobreheroi") $nome = @$_GET['n'];
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			<?php
				if($pagina == "sobreheroi") echo " ".$pagina." / ".$nome;
				else echo $pagina
			?>
		</title>
		<link rel="stylesheet" type="text/css" href="ASSETS/CSS/cor.css">
		<link rel="stylesheet" type="text/css" href="ASSETS/CSS/formato.css">
		<link rel="stylesheet" type="text/css" href="ASSETS/CSS/espaco.css">
	</head>
	<body class="fundo-cor-primaria">
		<div class="linha">
			<div class="coluna">
				<img src="ASSETS/IMAGE/ICONS/dota_icon.png" class="menu-icone-principal">
			</div>
			<div class="coluna direita margem-direita-1">
				<p class="label-branco"><a href="./index.php?p=home" class="sem-efeito label-branco">HOME</a> | <a href="./index.php?p=heroes" class="sem-efeito label-branco">HEROIS</a> | <a href="./index.php?p=sobrenos" class="sem-efeito label-branco">SOBRE NOS</a> </p>
			</div> 
		</div>
		<?php
			require_once 'VIEW/'.$pagina.'.php';
		?>
	</body>
</html>