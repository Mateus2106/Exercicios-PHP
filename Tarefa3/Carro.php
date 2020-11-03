<?php
	
	include "Proprietario.php";

	class Carro extends Proprietario{
		private $modelo;
		private $cor;
		private $ano;
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
		private $consumoMedio;
		private $distanciaViagem;
		private $consumoKM;
		private $combustivelAtual;

		
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
			else if(strpos($atrib, "consumoMedio")!==false){
				$this->consumoMedio=$valor;
			}
			else if(strpos($atrib, "distanciaViagem")!==false){
				$this->distanciaViagem=$valor;
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
			if(strpos($atrib, "consumoMedio")!==false){
				return $this->consumoMedio;
			}
			if(strpos($atrib, "distanciaViagem")!==false){
				return $this->distanciaViagem;
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

		public function trocaMarcha($valor){
			if($valor == 1){
				if($this->marchaAtual <= 5 and $this->marchaAtual >= 1)
					$this->marchaAtual++;
				else
					return "Não é possível trocar de marcha!!";
				$valor = 0;
			}
		}

		public function reduzMarcha($valor){
			if($valor == 1){
				if($this->marchaAtual <= 5 and $this->marchaAtual >= 1)
					$this->marchaAtual--;
				else
					return "Não é possível reduzir a marcha!!";
				$valor = 0;
			}
		}

		public function marchaRe(){
			if($this->velocidadeAtual <= 0){
				return "Marcha ré";
			}
			return "Não é possível engatar a marcha ré nessa velociadade!";
		}

		public function consumoCombustivel(){
			$consumoKM = $this->distanciaViagem / $this->consumoMedio;
			return $consumoKM;
		}

		public function volumeCombustivel(){
			$combustivelAtual = $this->volumeCombustivel - $this->consumoMedio;
			return $combustivelAtual;
		}			
	}
?>