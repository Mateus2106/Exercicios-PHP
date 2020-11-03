<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Crime</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="shortcut icon" href="./img/icon.png" type="image/x-png"/>
	</head>
	<body>
		<?php
			include "./Classe/Conexao.php";
			include "./Classe/Crime.php";

			$conexao = new Conexao();
			
			$resultado = conexao::query("Select * from crime");
			echo "Registros de Crimes: <br>";

			if($resultado->num_rows>0){
				while($item=$resultado->fetch_array()){
					$crimes = null;
					echo $item["1","2","3","4","5"]."-".$crime["Roubo", "Assassinato", "Assalto", "Roubo", "Falsificação"]."<br/>";
					$crime = new Crime(1, "Roubo");
					$crime = $item->id;
					$crime = $item->descricao;
					$crimes[] = $crime;
				}
			}
			else{
				echo "Nenhum registro!";
			}

			if($crimes){
				echo "<select name='crimes'>";
				foreach ($crimes as $crime) {
					echo "<option value='".$crimes->getId()."'>".$crime->getDescricao()."</option>";
				}
				echo "</select>";
			}

			echo "<table border=1>";
			echo "<thead><tr><th>id</th><th>descrição</th><th></th></tr></thead>";
			echo "<tbody>";
			foreach ($crimes as $crime) {
				echo "<tr>
						<td>".$crime->getId()."</td>
						<td>".$crime->getDescricao()."</td>
						<td>
							<a href='excluirCrime.php'?id=".$crime->getId().">Excluir</a>
						</td>
					</tr>";
			}
			echo "</tbody>";
			echo "</table>";

		?>
	</body>
</html>