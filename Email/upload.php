<?php
    ob_start();
	session_start();
?>
<html>

	<head>
		<title>Envio de Email</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="shortcut icon" href="uploads/favicon.ico"/>
	</head>
    
	<body>
	    <?php
		            
		    error_reporting(0);
			ini_set(“display_errors”, 0);

			date_default_timezone_set("America/Sao_Paulo");
	    ?>
		<header>
			<h2>Envio de Email</h2>
		</header>

		<div id="informacao">
			<p>Nome / Email / Assunto / Mensagem
		</div>

		<h2>Envio de Email ao Host do site</h2>
		<p id="p">Site para enviar um Email ao Host (dono) do site.</p>

		<main>
			<div id="tabelaimagem">
				<?php
		
					$_SESSION["usuario"] = $_POST["nome"];
					$usuario = $_SESSION["usuario"];
					$sobrenome = $_POST["sobrenome"];
					$message = $_POST["mensagem"];
					
					$nomec = "".$usuario." ".$sobrenome;

					$message = wordwrap($message, 70);
					$from = $_POST["email"];
					$to = "mateuschavesmarques@gmail.com, candido.cimol@gmail.com"; 
					$subject = $_POST["assunto"];
					$headers = 'From:'.$from;

					mail($to, $subject, $message, $headers);

					
					echo "<div id='echo3'>A sua mensagem foi enviada com sucesso.</div>";
					
					echo "<div id='echo4'><a href='index.php? acao=logout'>Voltar</a></div>";
						
					if(!empty($_GET['acao']))
					{
						if($_GET['acao'] == "logout")
						{
							unset($_SESSION["usuario"]);
							header("location:index.php");
						}
					}
				?>
			</div>		

		</main>

		<footer>
			<p>Copyright @ Mateus Chaves Marques</p>
		</footer>

	</body>

</html>
<?php
    ob_end_flush();
?>