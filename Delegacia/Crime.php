<?php
	
	include "Arma.php";

	class Crime{

		private $id;
		private $local;
		private $descricao;

		public function __construct($id, $local, $descricao){
			$this->id = $id;
			$this->local = $local;
			$this->descricao = $descricao;
		}

		public function getId(){
			return $this->id;
		}

		public function getLocal(){
			return $this->local;
		}

		public function getDescricao(){
			return $this->descricao;
		}
	}

?>