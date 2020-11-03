<?php
	
	include "Marca.php";

	class Endereco extends Marca{
		protected $rua;
		protected $bairro;
		protected $cidade;
		protected $estado;
		protected $cep;
		protected $complemento;

		public function __construct($rua, $bairro, $cidade, $estado, $cep, $complemento){
			parent::__construct("","","","");
			$this->rua=$rua;
			$this->bairro=$bairro;
			$this->cidade=$cidade;
			$this->estado=$estado;
			$this->cep=$cep;
			$this->complemento=$complemento;
		}

		public function getRua(){
			return $this->rua;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function getCep(){
			return $this->cep;
		}
		public function getComplemento(){
			return $this->complemento;
		}
	}
?>