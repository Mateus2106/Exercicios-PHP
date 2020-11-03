<!-- Escola Técnica Estadual Monteiro Lobato  -->
<!-- Tarefa Prática Segundo Trimestre  -->
<!-- Data: 30/05/19  -->
<!-- Aluno: Mateus Chaves Marques -->
<!-- Professor: Cândido Luciano De Farias -->
<!DOCTYPE html>
<html>
	<head>
		<title>Objeto</title>
	</head>
	<body>
		<?php
			class Proprietario{
				private $nome;
				private $cpf;
				private $RG;
				private $DN;

				public function __construct($nome, $cpf, $RG){
					$this->nome=$nome;
					$this->cpf=$cpf;
					$this->RG=$RG;
				}
				
				public function setNome($nome){
						$this->nome=$nome;
				}
				public function setCPF($cpf){
						$this->cpf=$cpf;
				}
				public function setRG($RG){
						$this->RG=$RG;
				}
				public function setDN($DN){
						$this->DN=$DN;
				}

				public function getNome(){
					return $this->nome;
				}
				public function getCPF(){
					return $this->cpf;
				}
				public function getRG(){
					return $this->RG;
				}
				public function getDN(){
					return $this->DN;
				}
			}
		?>
	</body>
</html>