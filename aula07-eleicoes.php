<!DOCTYPE html>
<html lang="pt-br>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title> Operadores Relacionais</title>
</head>
<body>
<div>
	<?php
		$ano = $_GET["an"];
		$idade = 2018 - $ano;
		echo "Quem nasceu em $ano tem idade de $idade anos <br/>";
		$tipo = ($idade>=18 && $idade<65)?"OBIGATORIO":"NAO OBRIGATORIO";
		echo "E dessa forma seu voto e $tipo";
	?>
</div>	
</body>
</html>