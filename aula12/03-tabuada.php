<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial;
	color: Red;
	}
  </style>
</head>
<body>
<div>
    <?php
       $n = isset($_GET["num"])?$_GET["num"]:1;
	   echo "<h1>Mostrando a Tabuada do $n </h1>";
	   for ($c = 1; $c <= 10; $c++) {
		 $r = $n * $c;
		 echo "$n x $c = $r <br/>";
	   }
    ?>
	<br/>
	<a href="exercicio-03-tabuada.php" class="botao">Voltar</a>
</div>
</body>
</html>
 