<?php
	class Endereco {
		private $rua;
		private $bairro;
		private $cidade;
		private $estado;
		private $cep;
		private $complemento;

		public function setRua($rua){
			$this->rua=$rua;
		}
		public function setBairro($bairro){
			$this->bairro=$bairro;
		}
		public function setCidade($cidade){
			$this->cidade=$cidade;
		}
		public function setEstado($estado){
			$this->estado=$estado;
		}
		public function setCep($cep){
			$this->cep=$cep;
		}
		public function setComplemento($complemento){
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