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
		$a = 3;
		$b = &$a;
		$b += 5;
		echo "A variavel A vale $a";
		echo "<br/>A variavel B vale $b";
		?>
</div>	
</body>
</html>