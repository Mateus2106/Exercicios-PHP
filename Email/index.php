<!DOCTYPE html>
<html>

	<head>
		<title>Registro</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="shortcut icon" href="imagens/favicon.ico"/>
	</head>

	<body>

		<header>
			<h2>Registro</h2>
		</header>

		<div id="informacao">
			<p>Formulário / Registro / Calculadora / Salário líquido
		</div>

		<h2>Registro e cálculo do salário líquido</h2>
		<p id="p">Registro para armazenar informações do usuário e o seu salário líquido acompanhado de seus principais descontos (INSS e IRPF)</p>

		<main id="formulario">
			<form action="upload.php" method="post" enctype="multipart/form-data">
		  	    <p class="textoform">Nome: <input type="text" name="nome" pattern="[A-ZÁÃÂÉÊÍÎÓÔÕÚÛ]{1}[a-záãâéêíîóôõúûç]+$" placeholder="Marcelo" class="campo" required></p>
		  	    <p class="textoform">Sobrenome: <input type="text" name="sobrenome" pattern="[A-ZÁÃÂÉÊÍÎÓÔÕÚÛ]{1}[a-záãâéêíîóôõúûç]+$" placeholder="Rodrigues" class="campo" required></p>
		  	    <p class="textoform">Email: <input type="text" name="email" class="campo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="exemplo@email.com" required></p>
		  	   	<p class="textoform">Assunto: <input type="text" name="assunto" placeholder="Assunto" class="campo" required></p>
		  	   	<p class="textoform">Mensagem: <input type="text" name="mensagem" placeholder="Mensagem" class="campo" required></p>
		  	   	<input id="submit" type="submit" name="submit">
		  	</form>
		</main>
		
		<footer>
			<p>Copyright @ Mateus Chaves Marques</p>
		</footer>
	</body>

</html>