<!DOCTYPE html>
<html>

	<head>
		<title>Cadastro</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="shortcut icon" href="imagens/favicon.ico"/>
	</head>

	<body>

		<header>
			<h2>Cadastro</h2>
		</header>

		<div id="informacao">
			<p>Formulário / Cadastro / Calculadora / Salário líquido
		</div>

		<h2>Cadastro e cálculo do salário líquido</h2>
		<p id="p">Cadastro para armazenar informações pessoais e o salário líquido e seus principais descontos (INSS e IRPF)</p>

		<main id="formulario">
			<form action="upload.php" method="post" enctype="multipart/form-data">
		  	    <p class="textoform">Nome: <input type="text" name="nome" pattern="[A-ZÁÃÂÉÊÍÎÓÔÕÚÛ]{1}[a-záãâéêíîóôõúûç]+$" placeholder="Marcelo" class="campo" required></p>
		  	    <p class="textoform">Sobrenome: <input type="text" name="sobrenome" pattern="[A-ZÁÃÂÉÊÍÎÓÔÕÚÛ]{1}[a-záãâéêíîóôõúûç]+$" placeholder="Rodrigues" class="campo" required></p>
		  	    <p class="textoform">Email: <input type="text" name="email" class="campo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="exemplo@email.com" required></p>
		  	   	<p class="textoform">CPF: <input type="text" name="cpf" pattern="[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$" placeholder="000.000.000-00" class="campo" required></p>
		  	   	<p class="textoform">Telefone: <input type="text" name="telefone" pattern="[0-9]{2}\s[0-9]{5}-[0-9]{4}$" placeholder="00 00000-0000" class="campo" required></p>
		  	   	<p class="textoform">Salário bruto: <input type="number" name="salario" step="0.01" min="1" placeholder="000,00" class="campo" required></p>
		  	   	<p id="formimagem">Foto: <input id="imageminput" type="file" name="arquivo" class="campo" required></p>
		  	   	<input id="submit" type="submit" name="submit">
		  	</form>
		</main>
		
		<footer>
			<p>Copyright @ Mateus Chaves Marques</p>
		</footer>
	</body>

</html>