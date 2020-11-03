
<?php 
    class Conexao{ 

      private static $con;

      private static function connect(){
        self::$con=mysqli_connect("localhost","root","vertrigo","delegacia");
        if(self::$con!=null){
          echo "conectado <br>";
        }
      }
      public static function query($sql){
        self::connect();
        $resultado = self::$con->query($sql);
        self::close();
        return $resultado;
      }
      private static function close(){
        self::$con->close();
      }
    }   
?>