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
		$a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
		$i = date("Y") - $a;
		echo "Voce nasceu em $a e tem $i anos.<br/>";
	/*	if($i >= 18){
				$v = "ja pode votar";
				$d = "ja pode dirigir";
		}
		else{
			$v = "nao pode dirigir";
			$d = "nao pode dirigir";
		}
	*/
		
		if ($i < 16){
			$tipoVoto = "nao vota";
		}
		elseif(($i >= 16 && $i < 18) || ($i>65)){
			$tipoVoto = "voto opcional";
			}
		else {
			$tipoVoto = "voto obrigatorio";
		}
		
		echo "para essa idade $tipoVoto";
    ?>
	<br/>
	<a href="aula09-exercicio01.html"> Voltar</a>
</div>
</body>
</html>
 