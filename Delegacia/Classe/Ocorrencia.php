  <!-- Escola Tecnica Estadual Monteiro Lobato -->
  <!-- Criação de Sites -->
  <!-- Pedro Arthur Marques -->
  <!-- Cândido Luciano Farias -->
  <!-- 26/06/2019 -->
<?php 
          class Ocorrencia{ 

            private $id;
            private $data;
            private $criminoso;
            private $vitima;
            private $arma;
            private $crime;

          function setId($id){
              $this->id=$id;
          }
          function getId(){
             return $this->id;
          }
          function setData($data){
              $this->data=$data;
          }
          function getData(){
             return $this->data;
          }
          function setCrime($crime){
              $this->crime=$crime;
          }
          function getCrime(){
             return $this->crime;
          }
          function setArma($arma){
              $this->arma=$arma;
          }
          function getArma(){
             return $this->arma;
          }
          function setCriminoso($criminoso){
              $this->criminoso=$criminoso;
          }
          function getCriminoso(){
             return $this->criminoso;
          }
          function setVitima($vitima){
              $this->vitima=$vitima;
          }
          function getVitima(){
             return $this->vitima;
          }
}
          
     ?>