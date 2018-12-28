<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
		$nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
		$ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
		$sexo = isset($_GET["sexo"]) ? $_GET["sexo"]: "[sem sexo]";
		$idade = date("Y") - $ano;
		echo "$nome e $sexo e tem $idade anos de idade.";
    ?>
	<br/>
	<a href="02-exercicio-aula08.html"> Voltar</a>
</div>
</body>
</html>
 