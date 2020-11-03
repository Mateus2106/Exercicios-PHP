  <!-- Escola Tecnica Estadual Monteiro Lobato -->
  <!-- Criação de Sites -->
  <!-- Pedro Arthur Marques -->
  <!-- Cândido Luciano Farias -->
  <!-- 26/06/2019 -->
<?php 
          class Endereco{ 

            private $id;
            private $logradouro;
            private $complemento;
            private $cep;
            private $bairro;
          
          
          function setId($id){
              $this->id=$id;
          }
          function getId(){
             return $this->id;
          }

          function setLogradouro($logradouro){
              $this->logradouro=$logradouro;
          }
          function getLogradouro(){
             return $this->logradouro;
          }

          function setComplemento($complemento){
              $this->complemento=$complemento;
          }
          function getComplemento(){
             return $this->complemento;
          }
          function setCep($cep){
              $this->cep=$cep;
          }
          function getCep(){
             return $this->cep;
          }
          function setbBirro($bairro){
              $this->bairro=$bairro;
          }
          function getBairro(){
             return $this->bairro;
          }

        }  
     ?>