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
	</head>
	<body>
		<img src="ASSETS/IMAGE/ICONS/dota_icon.png"> <p><a href="./index.php?p=home">HOME</a> | <a href="./index.php?p=heroes">HEROIS</a> | <a href="./index.php?p=sobrenos">SOBRE NOS</a> </p>
		<?php
			require_once 'VIEW/'.$pagina.'.php';
		?>
	</body>
</html>