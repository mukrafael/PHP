<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title></title>
</head>
<body>
	<?php
	$nome = "Rafael";
	$idade = 31;
	echo "$nome tem $idade anos!</br>";
	$nome2 = "Evelyn";
	$idade2 = 28;
	echo "$nome2 tem $idade2 anos!</br>";
	$n1 = $_GET["a"];
	$n2 = $_GET["b"];
	echo "<h2>Valores recebidos: $n1 e $n2</h2>";
	$m = ($n1 + $n2) / 2;
	$s = $n1 + $n2;
	echo "A soma entre $n1 + $n2 é igual $s";
	echo "</br>A soma vale ". ($n1+$n2);
	echo "</br>A subtracao vale ". ($n1-$n2);
	echo "</br>A multiplicacao vale ". ($n1*$n2);
	echo "</br>A divisao vale ". ($n1/$n2);
	echo "</br>O modulo vale ". ($n1%$n2);
	echo "</br>A média vale $m";
	?>
</body>
</html>
