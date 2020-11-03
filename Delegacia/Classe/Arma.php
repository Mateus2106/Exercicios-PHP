  <!-- Escola Tecnica Estadual Monteiro Lobato -->
  <!-- Criação de Sites -->
  <!-- Pedro Arthur Marques -->
  <!-- Cândido Luciano Farias -->
  <!-- 26/06/2019 -->
<?php 
          class Arma{ 

            private $id;
            private $descricao;
          
          
          function setId($id){
              $this->id=$id;
          }
          function getId(){
             return $this->id;
          }

          function setDescricao($descricao){
              $this->descricao=$descricao;
          }
          function getDescricao(){
             return $this->descricao;
          }

          }
     ?>