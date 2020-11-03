<html>
<head>
	<title>Funções</title>
	<meta charset="UTF-8">
<body>
	<?php 
	 	/*function exibir_mensagem($nome)
	 	{
	 		echo "Olá<br>";
	 		echo $nome;
	 	}
	 	exibir_mensagem("Mateus")*/
	 	/*function dia_atual()
	 	{
	 		$hoje=getdate();
	 		print_r($hoje);
	 		switch ($hoje["wday"]) 
	 		{
	 			case 0 : return "Domingo";break;
	 			case 1 : return "Segunda";break;
	 			case 2 : return "Terça";break;
	 			case 3 : return "Quarta";break;
	 			case 4 : return "Quinta";break;
	 			case 5 : return "Sexta";break;
	 			case 6 : return "Sábado";break;
	 		}
	 	}
	 	$dia=dia_atual();
	 	echo $dia;*/
	 	/*function somar($numA, $numB)
	 	{
	 		return $numA + $numB;
	 	}
	 	$resultado=somar(329,546);
	 	echo $resultado;*/
	 	function somar()
		{
			$numeros = func_get_args();
			$qtd_nums = func_num_args();
			$soma = 0;
			for($i = 0; $i < $qtd_nums;$i++)
			{
				$soma += $numeros[$i];
			}
			return $soma;
		}
		echo somar(12, 5, 548, 15, 29);
	 ?>
</body>
</html>