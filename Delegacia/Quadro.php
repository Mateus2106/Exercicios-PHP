<html>
	<head>
		<title>Atividade</title>
		<link rel="stylesheet" type="text/css" href="theme.css">
	</head>

	<body>
		<?php
			include "Ocorrencia.php";

			$ocorrencia = new Ocorrencia(1, "21/07/2020", "Assassinato");
			$crime = new Crime(1, "Bairro Centro", "Assassinato");
			$arma = new Arma(1, ".50", "Barret", "Teste");
			$vitima = new Vitima(1);
			$criminoso = new Criminoso(1);
			$pessoa = new Pessoa(1, "Mateus", "Chaves", "54938493", "4234125", "21/06/2001");
			$endereco = new Endereco(1, "Taquara", "Rio Grande do sul", "Jardim do Prado", "Primeira Rua", "Casa 2", "95600-000");
		?>
	</body>
</html>