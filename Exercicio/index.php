<html>

	<head>
		<title>Exercicio</title>
	</head>

	<body>
		<form method="post">
			Peso: <input type="number" name="peso">
			Altura: <input type="number" name="numero">	
			<input type="submit">

			<?php
				if(isset($_POST["peso"]) AND isset($_POST["altura"]) == 1)
				{
					$imc = $_POST["peso"] / ($_POST["altura"] * $_POST["altura"]);
					echo $imc;
				}
			?>
		</form>
	</body>

</html>