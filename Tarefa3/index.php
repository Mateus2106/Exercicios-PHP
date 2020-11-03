<!-- Escola Técnica Estadual Monteiro Lobato  -->
<!-- Tarefa Prática Segundo Trimestre  -->
<!-- Data: 30/05/19  -->
<!-- Aluno: Mateus Chaves Marques  -->
<!-- Professor: Cândido Luciano De Farias -->
<!DOCTYPE html>
<html>
	<head>
		<title>Tarefa</title>
		<link rel="stylesheet" type="text/css" href="./css/css.css"/>
	</head>
	<body>
		<header>
			<h2>Tarefa 3</h2>
		</header>
		<div id="php">
			<?php
				include "Carro.php";

				$proprietario = new Proprietario('Mateus', '000.000.000-00', '00.000.000-0', "21/06/2001");
				$endereco = new Endereco('Ervino Bach', 'Jardim do Prado', 'Taquara', 'RS', '00000-000', 'Teste');
				$carro = new Carro("","","","");
				$marca = new Marca('Chevrolet', 2, 2001, 1234);

				echo "<br><b>Proprietário </b><br><br>";
				echo "<b>Nome: </b>".$proprietario->getNome()."</br>";
				echo "<b>CPF: </b>".$proprietario->getCPF()."</br>";
				echo "<b>RG: </b>".$proprietario->getRG()."</br>";
				echo "<b>Data de nascimento: </b>".$proprietario->getDN()."</br>";
				echo "<b>------------------------------------</b><br>";

				echo "<b>Endereço </b><br><br>";
				echo "<b>Rua: </b>".$endereco->getRua()."</br>";
				echo "<b>Bairro: </b>".$endereco->getBairro()."</br>";
				echo "<b>Cidade: </b>".$endereco->getCidade()."</br>";
				echo "<b>Estado: </b>".$endereco->getEstado()."</br>";
				echo "<b>Cep: </b>".$endereco->getCep()."</br>";
				echo "<b>Complemento: </b>".$endereco->getComplemento()."</br>";
				echo "<b>------------------------------------</b><br>";

				$carro->modelo = "Corsa";
				$carro->cor = "Azul";
				$carro->ano = 2001;
				$carro->chassi = "9BW ZZZ377 VT 004251";
				$carro->proprietario = "Mateus";
				$carro->velocidadeMax = 160;
				$carro->velocidadeAtual = 80;
				$carro->nrPortas = 4;
				$carro->tetoSolar = "Não";
				$carro->nrMarchas = 5;
				$carro->cambioAutomatico = "Não";
				$carro->volumeCombustivel = 20;
				$carro->marchaAtual = 4;
				$carro->consumoMedio = 10;
				$carro->distanciaViagem = 100;
				$carro->volumeCombustivel = 25;

				echo "<b>Carro </b><br><br>";
				echo "<b>Modelo: </b>".$carro->modelo;
				echo "<br>";
				echo "<b>Cor: </b>".$carro->cor;
				echo "<br>";
				echo "<b>Ano: </b>".$carro->ano;
				echo "<br>";
				echo "<b>Chassi: </b>".$carro->chassi;
				echo "<br>";
				echo "<b>Proprietário: </b>".$carro->proprietario;
				echo "<br>";
				echo "<b>Velocidade máxima: </b>".$carro->velocidadeMax." Km";
				echo "<br>";
				echo "<b>Velocidade inicial: </b>".$carro->velocidadeAtual." Km";
				echo "<br>";
				echo "<b>Número de portas: </b>".$carro->nrPortas;
				echo "<br>";
				echo "<b>Possui teto solar: </b>".$carro->tetoSolar;
				echo "<br>";
				echo "<b>Número de marchas: </b>".$carro->nrMarchas;
				echo "<br>";
				echo "<b>Possui câmbio automático: </b>".$carro->cambioAutomatico;
				echo "<br>";
				echo "<b>Volume de combustível: </b>".$carro->volumeCombustivel." Litros";
				echo "<br>";
				echo "<b>Distância da viagem: </b>".$carro->distanciaViagem." Km";
				echo "<br>";
				echo "<b>Combustível gasto na viagem: </b>".$carro->consumoMedio." Litros";
				echo "<br>";
				echo "<b>Marcha Atual: </b>".$carro->marchaAtual;
				echo "<br>";
				echo "<b>------------------------------------</b><br>";

				echo "<b>Marca </b><br><br>";
				echo "<b>Nome: </b>".$marca->getNome();
				echo "<br>";
				echo "<b>Número de modelos: </b>".$marca->getNrModelos();
				echo "<br>";
				echo "<b>Ano de lançamento: </b>".$marca->getAnoLancamento();
				echo "<br>";
				echo "<b>Código: </b>".$marca->getCodigo();
				echo "<br>";
				echo "<b>------------------------------------</b><br>";
			?>
			<form method="POST" action="index.php">
	        	<input type="submit" value="Aumentar Velocidade" name="aumentar">
	        	<br><br>
	        	<input type="submit" value="Frear" name="frear">
	        	<br><br>
	        	<input type="submit" value="Trocar marcha" name="trocaMarcha">
	        	<br><br>
	        	<input type="submit" value="Reduzir marcha" name="reduzMarcha">
	        	<br><br>
	        	<input type="submit" value="Calcular autonomia" name="calcularAutonomia">
	        	<br><br>
	        	<input type="submit" value="Exibir volume do combustível" name="exibirVolume">
	      	</form>

	      	<?php
	      		echo "<b>------------------------------------</b><br>";
	      		if(!empty($_POST["aumentar"]))
	      		{
	      			$carro->acelera(1);
	      			echo "<br><b>Velocidade atual: </b>".$carro->velocidadeAtual." Km";
	      		}

	      		if(!empty($_POST["frear"]))
	      		{
	      			$carro->freia(1);
	      			echo "<br><b>Velocidade atual: </b>".$carro->velocidadeAtual." Km";
	      		}

	      		if(!empty($_POST["trocaMarcha"]))
	      		{
	      			$carro->trocaMarcha(1);
	      			echo "<br><b>Marcha atual: </b>".$carro->marchaAtual;
	      		}

	      		if(!empty($_POST["reduzMarcha"]))
	      		{
	      			$carro->reduzMarcha(1);
	      			echo "<br><b>Marcha Atual: </b>".$carro->marchaAtual;
	      		}

	      		if(!empty($_POST["calcularAutonomia"]))
	      		{
	      			echo "<br><b>Autonomia do veículo: </b>".$carro->consumoCombustivel()." Km/Litro";
	      		}

	      		if(!empty($_POST["exibirVolume"]))
	      		{
	      			echo "<br><b>Volume atual do combustível: </b>".$carro->volumeCombustivel()." Litros";
	      		}
	      	?>
	      	<br><br>
	    </div>
      	<footer>
      		<h4>Copyright @ Mateus Chaves Marques</h4>
      	</footer>
	</body>
</html>