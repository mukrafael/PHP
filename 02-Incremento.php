<!DOCTYPE html>
<html lang="pt-br>
<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<title> Operadores de Atribuição</title>
</head>
<body>
<div>
		<?php
		$atual = $_GET["aa"];
		echo "O ano atual e $atual e o ano anterior e " . --$atual;
		?>
</div>		
</body>
</html>