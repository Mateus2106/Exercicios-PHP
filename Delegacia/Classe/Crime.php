  <!-- Escola Tecnica Estadual Monteiro Lobato -->
  <!-- Criação de Sites -->
  <!-- Pedro Arthur Marques -->
  <!-- Cândido Luciano Farias -->
  <!-- 26/06/2019 -->
<?php 
          class Crime{ 

            private $id;
            private $descricao;
          
          public function __construct($id, $descricao){
            $this->id=$id;
            $this->descricao=$descricao;
          }

          function getId(){
             return $this->id;
          }

          function getDescricao(){
             return $this->descricao;
          }

          }
     ?>