<!-- Escola Técnica Estadual Monteiro Lobato  -->
<!-- Tarefa Prática Segundo Trimestre  -->
<!-- Data: 30/05/19  -->
<!-- Aluno: Mateus Chaves Marques  -->
<!-- Professor: Cândido Luciano De Farias -->
<!DOCTYPE html>
<html>
	<head>
		<title>Objeto</title>
	</head>
	<body>
		<?php 
			include "Proprietario.php";
			include "Carro.php";
			include "Endereco.php";

			$proprietario = new Proprietario('Mateus', '000.000.000-00', '00.000.000-00');
			$endereco = new Endereco();
			$carro = new Carro();

			$proprietario->setDN('30/05/2019');
			$endereco->setRua('Ervino Bach');
			$endereco->setBairro('Jardim do Prado');
			$endereco->setCidade('Taquara');
			$endereco->setEstado('RS');
			$endereco->setCep('00000-000');
			$endereco->setComplemento('teste');

			echo "Proprietário <br><br>";
			echo "Nome: ".$proprietario->getNome()."</br>";
			echo "CPF: ".$proprietario->getCPF()."</br>";
			echo "RG: ".$proprietario->getRG()."</br>";
			echo "DN: ".$proprietario->getDN()."</br>";
			echo "<br>------------------<br>";

			echo "Endereço <br><br>";
			echo "Rua: ".$endereco->getRua()."</br>";
			echo "Bairro: ".$endereco->getBairro()."</br>";
			echo "Cidade: ".$endereco->getCidade()."</br>";
			echo "Estado: ".$endereco->getEstado()."</br>";
			echo "Cep: ".$endereco->getCep()."</br>";
			echo "Complemento: ".$endereco->getComplemento()."</br>";
			echo "<br>------------------<br>";

			$carro->modelo = "Corsa";
			$carro->cor = "Azul";
			$carro->ano = 2001;
			$carro->marca = "Chevrolet";
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

			echo "Carro <br><br>";
			echo $carro->modelo;
			echo "<br>";
			echo $carro->cor;
			echo "<br>";
			echo $carro->ano;
			echo "<br>";
			echo $carro->marca;
			echo "<br>";
			echo $carro->chassi;
			echo "<br>";
			echo $carro->proprietario;
			echo "<br>";
			echo $carro->velocidadeMax."Km";
			echo "<br>";
			echo $carro->velocidadeAtual."Km";
			echo "<br>";
			echo $carro->nrPortas;
			echo "<br>";
			echo $carro->tetoSolar;
			echo "<br>";
			echo $carro->nrMarchas;
			echo "<br>";
			echo $carro->cambioAutomatico;
			echo "<br>";
			echo $carro->volumeCombustivel."Litros";
			echo "<br>";
			echo $carro->marchaAtual;
			echo "<br>";
			echo "------------------<br>";
		?>
		<form method="POST" action="index.php">
        	<input type="submit" value="Aumentar Velocidade" name="aumentar">
        	<br>
        	<input type="submit" value="Frear" name="frear">
        	<br>
        	<input type=number value="Nova marcha" name="trocaMarcha">
        	<input type="submit" value="Trocar marcha">
        	<br>
        	<input type="submit" value="Reduz marcha" name="reduzMarcha">
      	</form>

      	<?php
      		if(!empty($_POST["aumentar"]))
      		{
      			$carro->acelera(1);
      			echo "velocidade Atual:".$carro->velocidadeAtual."Km";
      		}

      		if(!empty($_POST["frear"]))
      		{
      			$carro->freia(1);
      			echo "velocidade Atual: ".$carro->velocidadeAtual."Km";
      		}

      		if(!empty($_POST["trocaMarcha"]))
      		{
      			$carro->trocaMarcha(1, $_POST["trocaMarcha"]);
      			echo "Marcha Atual: ".$carro->marchaAtual;
      		}

      		if(!empty($_POST["reduzMarcha"]))
      		{
      			$carro->reduzMarcha(1);
      			echo "Marcha Atual: ".$carro->marchaAtual;
      		}
      	?>
	</body>
</html>