  <!-- Escola Tecnica Estadual Monteiro Lobato -->
  <!-- Criação de Sites -->
  <!-- Pedro Arthur Marques -->
  <!-- Cândido Luciano Farias -->
  <!-- 26/06/2019 -->
<?php 
          class Pessoa{ 

            protected $id;
            protected $nome;
            protected $cpf;
            protected $rg;
            protected $endereço;
          
          function setId($id){
              $this->id=$id;
          }
          function getId(){
             return $this->id;
          }

          function setNome($nome){
              $this->nome=$nome;
          }
          function getNome(){
             return $this->nome;
          }
          function setCpf($cpf){
              $this->cpf=$cpf;
          }
          function getCpf(){
             return $this->cpf;
          }
          function setRg($rg){
              $this->rg=$rg;
          }
          function getRg(){
             return $this->rg;
          }
          function setEndereco($endereco){
              $this->endereco=$endereco;
          }
          function getEndereco(){
             return $this->endereco;
          }

       }   
     ?>