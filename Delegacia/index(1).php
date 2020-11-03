<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Automovel</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="shortcut icon" href="./img/icon.png" type="image/x-png"/>
	</head>
	<body>
			<?php
				include 'Classe/Pessoa.php';
				include 'Classe/Ocorrencia.php';
				include 'Classe/Vitima.php';
				include 'Classe/Criminoso.php';
				include 'Classe/Conexao.php';

		          $vitima = new Vitima();

		          $crime->setId(1);
		          $crime->setDescricao("Roubo");
		          
		          $vitima->setId(1);
		          $vitima->setNome("Mateus");

		          $ocorrencia = new Ocorrencia();

		          $ocorrencia->setId(1);
		          $ocorrencia->setVitima($vitima);

		          $conexao = new Conexao();

		          $resultado = conexao::query("select * from arma");
		          echo "<br/>Registros de Armas: ".$resultado->num_rows ."<br/>";

		          echo "<select nome='arma'>";
					while($arma=$resultado->fetch_object()){
					    echo "<option value='".$arma->id."'>".$arma->descricao."</option>";
					}
				  echo "</select>";  
		     ?>
		
		<form action="php.php" method="post" enctype="multipart/form-data">
			<br><label>Data</label><br><input style="height: 35px;" required type="date" name="data"/><br>
			     <fieldset>
					<legend><b><i>Vitima</i></b></legend>
							<label>Nome</label><br><input style="height: 35px;" required type="text" name="nome" pattern="[A-z\sÀ-ú]+$" placeholder="João" /><br>
							<label>Sobrenome</label><br><input style="height: 35px;" required type="text" name="sobrenome" pattern="[A-z\sÀ-ú]+$" placeholder="Silva"><br>
							<label>CPF</label><br><input style="height: 35px;" required type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00"><br>
							<label>RG</label><br><input style="height: 35px;" name="rg" type="text" pattern="[0-9]{9}" placeholder="123456789"/><br>
						    <label>Logradouro</label><br><input style="height: 35px;" required type="text" name="logradouro" placeholder="Julio de Castilhos" /><br>
							<label>Bairro</label><br><input style="height: 35px;" required type="text" name="bairro"  placeholder="Empresa"><br>
							<label>Estado</label><br>
							<select name="estado" style="height: 35px; width: 175px;">
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
							</select><br>
							<label>CEP</label><br><input style="height: 35px;" required pattern="\d{5}-?\d{3}" type="text" name="cep" placeholder="00000-000"/><br>
							<label>Complemento</label><br><input style="height: 35px;" type="text" name="comp" placeholder="Apartamento"/><br>
					</fieldset>
					<fieldset>
					<legend><b><i>Criminoso</i></b></legend>
							<label>Nome</label><br><input style="height: 35px;" required type="text" name="nome" pattern="[A-z\sÀ-ú]+$" placeholder="João" /><br>
							<label>Sobrenome</label><br><input style="height: 35px;" required type="text" name="sobrenome" pattern="[A-z\sÀ-ú]+$" placeholder="Silva"><br>
							<label>CPF</label><br><input style="height: 35px;" required type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00"><br>
							<label>RG</label><br><input style="height: 35px;" name="rg" type="text" pattern="[0-9]{9}" placeholder="123456789"/><br>
						    <label>Logradouro</label><br><input style="height: 35px;" required type="text" name="logradouro" placeholder="Julio de Castilhos" /><br>
							<label>Bairro</label><br><input style="height: 35px;" required type="text" name="bairro"  placeholder="Empresa"><br>
							<label>Estado</label><br>
							<select name="estado" style="height: 35px; width: 175px;">
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
							</select><br>
							<label>CEP</label><br><input style="height: 35px;" required pattern="\d{5}-?\d{3}" type="text" name="cep" placeholder="00000-000"/><br>
							<label>Complemento</label><br><input style="height: 35px;" type="text" name="comp" placeholder="Apartamento"/><br>
							<label>Crime</label><br><input style="height: 35px;" type="text" name="crime" placeholder="suicidio"/><br>
							<label>Arma</label><br><input style="height: 35px;" type="text" name="arma" placeholder="Glock-28"/><br>
				</fieldset>
				<input type="submit" value="Enviar" name="submit">
			</form>
	</body>
</html>