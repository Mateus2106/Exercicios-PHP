  <!-- Escola Tecnica Estadual Monteiro Lobato -->
  <!-- Criação de Sites -->
  <!-- Mateus Chaves Marques -->
  <!-- Cândido Luciano Farias -->
  <!-- 28/06/2019 -->

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="./css/css.css" media="screen" />
		<title>Cadastro MEI</title>
	</head>

	<body>
		<header>
			<h2>Cadastro MEI</h2>
		</header>

		<div id="php">
			<?php
				include "php.php";

				echo "".Util::Cadastro();

				Util::setNome("Mateus");
				Util::setSobrenome("Marques");
				Util::setCPF("000-000-000-00");
				Util::setRG("000000000");
				Util::setTelefone("51 90000-0000");
				Util::setCidade("Taquara");
				Util::setBairro("Jardim do Prado");
				Util::setRua("Ervino Bach");
				Util::setEstado("Rio Grande do Sul");
				Util::setCEP("95600-000");
				Util::setComplemento("Rua sem saída");
				Util::setEmpregados(1);
				Util::setSalarioBruto(2000);
				Util::setSalarioLiquido(1200);

				echo "<b>Nome: </b>".Util::getNome()."<br>";
				echo "<b>Sobrenome: </b>".Util::getSobrenome()."<br>";
				echo "<b>CPF: </b>".Util::getCPF()."<br>";
				echo "<b>RG: </b>".Util::getRG()."<br>";
				echo "<b>Telefone: </b>".Util::getTelefone()."<br>";
				echo "<b>Cidade </b>".Util::getCidade()."<br>";
				echo "<b>Bairro </b>".Util::getBairro()."<br>";
				echo "<b>Rua </b>".Util::getRua()."<br>";
				echo "<b>Estado </b>".Util::getEstado()."<br>";
				echo "<b>CEP </b>".Util::getCEP()."<br>";
				echo "<b>Complemento: </b>".Util::getComplemento()."<br>";
				echo "<b>Empregados: </b>".Util::getEmpregados()."<br>";
				echo "<b>Salário Bruto: </b>R$".Util::getSalarioBruto()."<br>";
				echo "<b>Salário Líquido: </b>R$".Util::getSalarioLiquido()."<br>";
				echo "<b>Descontos: </b>R$".Util::verificarDescontos()."<br>";
				echo "<b>Salário Anual: </b>R$".Util::salarioAnual()."<br>";

				echo "".Util::verificaMEI();
				echo "".Util::Mensagem();
				echo "".Util::DataHorario();
			?>
		</div>
		<footer>
			<h4>Copyright @ Mateus Chaves Marques</h4>
		</footer>
	</body>
</html>