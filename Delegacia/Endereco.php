<?php
	
	class Endereco{
		
		private $id;
		private $cidade;
		private $estado;
		private $bairro;
		private $logradouro;
		private $complemento;
		private $cep;

		public function __construct($id, $cidade, $estado, $bairro, $logradouro, $complemento, $cep){
			$this->id = $id;
			$this->cidade = $cidade;
			$this->estado = $estado;
			$this->bairro = $bairro;
			$this->logradouro = $logradouro;
			$this->complemento = $complemento;
			$this->cep = $cep;
		}

		public function getId(){
			return $this->id;
		}

		public function getCidade(){
			return $this->cidade;
		}

		public function getEstado(){
			return $this->estado;
		}

		public function getLogradouro(){
			return $this->logradouro;
		}

		public function getComplemento(){
			return $this->complemento;
		}

		public function getCep(){
			return $this->cep;
		}
	}

?>