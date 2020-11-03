<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<meta charset="UTF-8">
	</head>

	<body>

		<?php
			$caminho_dir = "uploads/";
			$arquivo = $caminho_dir.basename($_FILES["arquivo"]["name"]);
			$uploadOk = 1;
			$tipo_imagem = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));

			$url_imagem = $_SERVER['HTTP_HOST']."uploads/".$_FILES["arquivo"]["name"];

			$salario = $_POST["salario"];
		?>

		<table id="tabela">
			<tr class="coluna">
				<td>Nome</td>
				<td><?php echo $_POST["nome"]?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $_POST["email"]?></td>
			</tr>
			<tr>
				<td>CPF</td>
				<td><?php echo $_POST["cpf"]?></td>
			</tr>
			<tr>
				<td>Telefone</td>
				<td><?php echo $_POST["telefone"]?></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><?php echo "<img src='".$url_imagem."'/>";?></td>
			</tr>
			<tr>
				<td>Salário Bruto</td>
				<td id="mostrar1"></td>
			</tr>
			<tr>
				<td>Salário liquido</td>
				<td id="mostrar2"></td>
			</tr>
			<tr>
				<td>INSS</td>
				<td id="mostrar3"></td>
			</tr>
			<tr>
				<td>IRPF</td>
				<td id="mostrar4"></td>
			</tr>

		</table>

		<script>

			var calculo = function() //Função para a realização do cálculo e exibição na tela
			{
				var salario = "<?php echo $salario; ?>";

				if(salario >= 0) //Teste para ver se o salário digitado é positivo, ou seja, válido
				{
					if(salario <=  1751.81) //Teste para ver em qual situação do INSS o salário que o usuário digitou se encaixa
					{
						var inss = (8/100) * salario; //Cálculo do INSS
					}
			
					if(salario >= 1751.82 && salario <= 2919.72) //Teste para ver em qual situação do INSS o salário que o usuário digitou se encaixa
					{
						var inss = (9/100) * salario; //Cálculo do INSS
					}

					if(salario >= 2919.73 && salario <= 5839.45) //Teste para ver em qual situação do INSS o salário que o usuário digitou se encaixa
					{
						var inss = (11/100) * salario; //Cálculo do INSS
					}

					if(salario >= 5839.46) //Teste para ver em qual situação do INSS o salário que o usuário digitou se encaixa
					{
						var inss =  642.34; //Cálculo do INSS
					}

					var irpf_inicial = salario - inss; //Cálculo pra descobrir o salário da pessoa com o INSS descontado
			
					if(irpf_inicial <= 1903.98) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
					{
						irpf_final = 0; //Cálculo IRPF
						salario_final = irpf_inicial; //Cálculo Salário Líquido
					}

					if(irpf_inicial >=  1903.99 && irpf_inicial <= 2826.65) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
					{
						var irpf_final = ((7.5/100) * irpf_inicial) - 142.80; //Cálculo IRPF
						var salario_final = irpf_inicial - irpf_final; //Cálculo Salário Líquido
					}

					if(irpf_inicial >= 2826.66  && irpf_inicial <= 3751.05) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
					{
						var irpf_final = ((15/100) * irpf_inicial) - 354.80; //Cálculo IRPF
						var salario_final = irpf_inicial - irpf_final; //Cálculo Salário Líquido
					}

					if(irpf_inicial >= 3751.06 && irpf_inicial <= 4664.68) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
					{
						var irpf_final = ((22.5/100) * irpf_inicial) - 636.13; //Cálculo IRPF
						var salario_final = irpf_inicial - irpf_final; //Cálculo Salário Líquido
					}

					if(irpf_inicial >= 4664.69) //Teste para ver em qual situação do IRPF o salário que o usuário digitou se encaixa
					{
						var irpf_final = ((27.5/100) * irpf_inicial) - 869.36; //Cálculo IRPF
						var salario_final = irpf_inicial - irpf_final; //Cálculo Salário Líquido
					}

	
					document.getElementById("mostrar1").innerHTML = "R$ "+salario+""; //Mostra o salário digitado pelo usuário na tabela
					document.getElementById("mostrar2").innerHTML = "R$ "+salario_final.toFixed(2)+""; //Mostra o salário líquido
					document.getElementById("mostrar3").innerHTML = "R$ "+inss.toFixed(2)+""; //Mostra o INSS obtido nos cálculos
					document.getElementById("mostrar4").innerHTML = "R$ "+irpf_final.toFixed(2)+""; //Mostra o IRPF obtido nos cálculos
				}
			};
		</script>
	</body>

</html>