<?php
	class Carro {
		private $modelo;
		private $cor;
		private $ano;
		private $marca;
		private $chassi;
		private $proprietario;
		private $velocidadeMax;
		private $velocidadeAtual;
		private $nrPortas;
		private $tetoSolar;
		private $nrMarchas;
		private $cambioAutomatico;
		private $volumeCombustivel;
		private $marchaAtual;

		public function __set($atrib, $valor){
			if(strpos($atrib,"cor")!==false){
				$this->cor=$valor;
			}
			else if(strpos($atrib, "modelo")!==false){
				$this->modelo=$valor;
			}
			else if(strpos($atrib, "ano")!==false){
				$this->ano=$valor;
			}
			else if(strpos($atrib, "marca")!==false){
				$this->marca=$valor;
			}
			else if(strpos($atrib, "chassi")!==false){
				$this->chassi=$valor;
			}
			else if(strpos($atrib, "proprietario")!==false){
				$this->proprietario=$valor;
			}
			else if(strpos($atrib, "velocidadeMax")!==false){
				$this->velocidadeMax=$valor;
			}
			else if(strpos($atrib, "velocidadeAtual")!==false){
				$this->velocidadeAtual=$valor;
			}
			else if(strpos($atrib, "nrPortas")!==false){
				$this->nrPortas=$valor;
			}
			else if(strpos($atrib, "tetoSolar")!==false){
				$this->tetoSolar=$valor;
			}
			else if(strpos($atrib, "nrMarchas")!==false){
				$this->nrMarchas=$valor;
			}
			else if(strpos($atrib, "cambioAutomatico")!==false){
				$this->cambioAutomatico=$valor;
			}
			else if(strpos($atrib, "volumeCombustivel")!==false){
				$this->volumeCombustivel=$valor;
			}
			else if(strpos($atrib, "marchaAtual")!==false){
				$this->marchaAtual=$valor;
			}
		}
		
		public function __get($atrib){
			if(strpos($atrib, "modelo")!==false){
				return $this->modelo;
			}
			if(strpos($atrib, "cor")!==false){
				return $this->cor;
			}
			if(strpos($atrib, "ano")!==false){
				return $this->ano;
			}
			if(strpos($atrib, "marca")!==false){
				return $this->marca;
			}
			if(strpos($atrib, "chassi")!==false){
				return $this->chassi;
			}
			if(strpos($atrib, "proprietario")!==false){
				return $this->proprietario;
			}
			if(strpos($atrib, "velocidadeMax")!==false){
				return $this->velocidadeMax;
			}
			if(strpos($atrib, "velocidadeAtual")!==false){
				return $this->velocidadeAtual;
			}
			if(strpos($atrib, "nrPortas")!==false){
				return $this->nrPortas;
			}
			if(strpos($atrib, "tetoSolar")!==false){
				return $this->tetoSolar;
			}
			if(strpos($atrib, "nrMarchas")!==false){
				return $this->nrMarchas;
			}
			if(strpos($atrib, "cambioAutomatico")!==false){
				return $this->cambioAutomatico;
			}
			if(strpos($atrib, "volumeCombustivel")!==false){
				return $this->volumeCombustivel;
			}
			if(strpos($atrib, "marchaAtual")!==false){
				return $this->marchaAtual;
			}
		}

		public function acelera($valor){
			if($valor == 1)
			{
				$this->velocidadeAtual++;
				$valor = 0;
			}
		}

		public function freia($valor){
			if($valor == 1){
				$this->velocidadeAtual = 0;
				$valor = 0;
			}
		}

		public function trocaMarcha($valor, $novo){
			if($valor == 1){
				$this->marchaAtual = $novo;
				$valor = 0;
			}
		}

		public function reduzMarcha($valor){
			if($valor == 1){
				$this->marchaAtual--;
				$valor = 0;
			}
		}
	}
?>