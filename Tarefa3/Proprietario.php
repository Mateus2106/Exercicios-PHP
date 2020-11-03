<!-- Escola Técnica Estadual Monteiro Lobato  -->
<!-- Tarefa Prática Segundo Trimestre  -->
<!-- Data: 30/05/19  -->
<!-- Aluno: Mateus Chaves Marques -->
<!-- Professor: Cândido Luciano De Farias -->

<?php
	
	include "Endereco.php";

	class Proprietario extends Endereco{
		protected $nome;
		protected $cpf;
		protected $RG;
		protected $DN;

		public function __construct($nome, $cpf, $RG, $DN){
			parent::__construct("","","","","","");
			$this->nome=$nome;
			$this->cpf=$cpf;
			$this->RG=$RG;
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