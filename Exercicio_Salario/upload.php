
<html>

	<head>
		<title>Cadastro</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="shortcut icon" href="uploads/favicon.ico"/>
	</head>

	<body>

		<?php
			if(!empty($_POST["salario"]))
			{
				$salario = $_POST["salario"];

				if($salario <=  1751.81) //Teste para ver em qual situação do INSS o salário que o usuário digitou se encaixa
				{
					$inss = (8/100) * $salario; //Cálculo do INSS
				}
				
				if($salario >= 1751.82 && $salario <= 2919.72) //Teste para ver em qual situação do INSS o salário que o usuário digitou se encaixa
				{
					$inss = (9/100) * $salario; //Cálculo do INSS
				}

				if($salario >= 2919.73 && $salario <= 5839.45) //Teste para ver em qual situação do INSS o salário que o usuário digitou se encaixa
				{
					$inss = (11/100) * $salario; //Cálculo do INSS
				}

				if($salario >= 5839.46) //Teste para ver em qual situação do INSS o salário que o usuário digitou se encaixa
				{
					$inss =  642.34; //Cálculo do INSS
				}

				$irpf_inicial = $salario - $inss; //Cálculo pra descobrir o salário da pessoa com o INSS descontado
				
				if($irpf_inicial <= 1903.98) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
				{
					$irpf_final = 0; //Cálculo IRPF
					$salario_final = $irpf_inicial; //Cálculo Salário Líquido
				}

				if($irpf_inicial >=  1903.99 && $irpf_inicial <= 2826.65) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
				{
					$irpf_final = ((7.5/100) * $irpf_inicial) - 142.80; //Cálculo IRPF
					$salario_final = $irpf_inicial - $irpf_final; //Cálculo Salário Líquido
				}

				if($irpf_inicial >= 2826.66  && $irpf_inicial <= 3751.05) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
				{
					$irpf_final = ((15/100) * $irpf_inicial) - 354.80; //Cálculo IRPF
					$salario_final = $irpf_inicial - $irpf_final; //Cálculo Salário Líquido
				}

				if($irpf_inicial >= 3751.06 && $irpf_inicial <= 4664.68) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
				{
					$irpf_final = ((22.5/100) * $irpf_inicial) - 636.13; //Cálculo IRPF
					$salario_final = $irpf_inicial - $irpf_final; //Cálculo Salário Líquido
				}

				if($irpf_inicial >= 4664.69) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
				{
					$irpf_final = ((27.5/100) * $irpf_inicial) - 869.36; //Cálculo IRPF
					$salario_final = $irpf_inicial - $irpf_final; //Cálculo Salário Líquido
				}

				$salario = number_format($salario, 2);
				$inss = number_format($inss, 2);
				$irpf_final = number_format($irpf_final, 2);
				$salario_final = number_format($salario_final, 2);
			}
			else
			{
			    echo("<script>location.href='http://cadastrosalario.000webhostapp.com';</script>");
			}
		?>

		<header>
			<h2>Cadastro</h2>
		</header>

		<div id="informacao">
			<p>Formulário / Cadastro / Calculadora / Salário líquido
		</div>

		<h2>Cadastro e cálculo do salário líquido</h2>
		<p id="p">Cadastro para armazenar informações pessoais e o salário líquido e seus principais descontos (INSS e IRPF)</p>

		<main>

			<div id="tabelaimagem">
				<h2>Cadastro do usuário</h2>
				<?php 
					$destino = 'uploads/'.$_FILES['arquivo']['name'];
					$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
		 			move_uploaded_file($arquivo_tmp, $destino);
		 			$arquivo = $destino.basename($_FILES["arquivo"]["name"]);
		 			$tipo_imagem = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
		 			$uploadOk = 1;
					
					if(!empty($_POST["arquivo"])) 
					{
						$check = getimagesize($_FILES["arquivo"]["tmp_name"]);
					    if($check !== false) 
					   	{
							$uploadOk = 1;
						} 
						else 
						{
							echo "<p>O arquivo não é uma imagem.</p>";
							$uploadOk = 0;
						}
					}

					if(file_exists($arquivo)) 
					{
						echo "<p>Desculpe, o arquivo já existe.</p>";
						$uploadOk = 0;
					}
						
					if($_FILES["arquivo"]["size"] > 500000) 
					{
						echo "<p>Desculpe, Seu arquivo é muito grande.</p>";
						$uploadOk = 0;
					}

					if($tipo_imagem !="jpg" && $tipo_imagem !="png" && $tipo_imagem !="jpeg" && $tipo_imagem !="gif") 
					{
						echo "<p>Desculpe, apenas arquivos JPG, JPEG, PNG & GIF são permitidos.</p>";
						$uploadOk = 0;
					}

					if($uploadOk == 0) 
					{
					    echo "<p>Desculpe, Seu arquivo não pode ser carregado.</p>";
					}
					else
					{
						$url_imagem = "uploads/".$_FILES["arquivo"]["name"];
						echo "<img id='imagemcadastro' src='".$url_imagem."'/>";
					} 
				?>
				<table id="tabela">
					<tr>
						<td>Nome:</td>
						<td><?php echo $_POST["nome"]?></td>
					</tr>
					<tr>
						<td>Sobrenome:</td>
						<td><?php echo $_POST["sobrenome"]?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?php echo $_POST["email"]?></td>
					</tr>
					<tr>
						<td>CPF:</td>
						<td><?php echo $_POST["cpf"]?></td>
					</tr>
					<tr>
						<td>Telefone:</td>
						<td><?php echo $_POST["telefone"]?></td>
					</tr>
					<tr>
						<td>Salário Bruto:</td>
						<td>R$ <?php echo $salario;?></td>
					</tr>
					<tr>
						<td>Salário liquido:</td>
						<td>R$ <?php echo $salario_final;?></td>
					</tr>
					<tr>
						<td>INSS:</td>
						<td>R$ <?php echo $inss;?></td>
					</tr>
					<tr>
						<td>IRPF:</td>
						<td>R$ <?php echo $irpf_final;?></td>
					</tr>
				</table>
			</div>		

		</main>

		<footer>
			<p>Copyright @ Mateus Chaves Marques</p>
		</footer>

	</body>

</html>