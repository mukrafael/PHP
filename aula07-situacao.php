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
		$nota1 = $_GET["n1"];
		$nota2 = $_GET["n2"];
		$m = ($nota1+$nota2)/2;
		echo "A media entre $nota1 e $nota2 e $m <br>";
		//$sit = ($m<6) ? "REPROVADO" : "APROVADO"; Uma forma com mesmo resultado
		echo "A situacao do aluno e " . (($m<6)?"REPROVADO":"APROVADO");
	?>
</div>	
</body>
</html>