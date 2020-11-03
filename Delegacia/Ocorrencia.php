<?php
	
	include "Pessoa.php";
	include "Criminoso.php";
	include "Vitima.php";
	include "Crime.php";

	class Ocorrencia{
		private $id;
		private $data;
		private $descricao;

		public function __construct($id, $data, $descricao){
			$this->id = $id;
			$this->data = $data;
			$this->descricao = $descricao;
		}

		public function getId(){
			return $this->id;
		}

		public function getData(){
			return $this->id;
		}

		public function getDescricao(){
			return $this->id;
		}

	}


?>