<?php

	class Marca{
		protected $nome;
		protected $nrModelos;
		protected $anoLancamento;
		protected $codigo;

		public function __construct($nome, $nrModelos, $anoLancamento, $codigo){
			$this->nome=$nome;
			$this->nrModelos=$nrModelos;
			$this->anoLancamento=$anoLancamento;
			$this->codigo=$codigo;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getNrModelos(){
			return $this->nrModelos;
		}

		public function getAnoLancamento(){
			return $this->anoLancamento;
		}

		public function getCodigo(){
			return $this->codigo;
		}
	}
?>