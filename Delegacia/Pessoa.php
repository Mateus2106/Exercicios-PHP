<?php
	
	include "Endereco.php";

	class Pessoa{

		private $id;
		private $nome;
		private $sobrenome;
		private $cpf;
		private $rg;
		private $dn;

		public function __construct($id, $nome, $sobrenome, $cpf, $rg, $dn){
			$this->id = $id;
			$this->nome = $nome;
			$this->sobrenome = $sobrenome;
			$this->cpf = $cpf;
			$this->rg = $rg;
			$this->dn = $dn;
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getSobrenome(){
			return $this->sobrenome;
		}

		public function getCpf(){
			return $this->cpf;
		}

		public function getRg(){
			return $this->rg;
		}

		public function getDataNascimento(){
			return $this->dn;
		}
	}
	
?>