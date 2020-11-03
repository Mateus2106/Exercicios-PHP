<?php
  date_default_timezone_set('America/Sao_Paulo');
  $dataLocal = date('d/m/Y H:i:s', time());

  class Util{
    private static $rua;
    private static $nome;
    private static $sobrenome;
    private static $cpf;
    private static $rg;
    private static $telefone;
    private static $cidade;
    private static $bairro;
    private static $estado;
    private static $cep;
    private static $complemento;
    private static $empregados;
    private static $salarioBruto;
    private static $salarioLiquido;
    private static $valorDescontos;
    private static $salarioAnual;


    public static function Cadastro(){
      echo "<b><h2>Cadastro para microempreendedor individual</h2></b>";
    }

    public static function setNome($valor){
      self::$nome = $valor;
    }

    public static function getNome(){
      return self::$nome;
    }

    public static function setSobrenome($valor){
      self::$sobrenome = $valor;
    }

    public static function getSobrenome(){
      return self::$sobrenome;
    }

    public static function setCPF($valor){
      self::$cpf = $valor;
    }

    public static function getCPF(){
      return self::$cpf;
    }

    public static function setRG($valor){
      self::$rg = $valor;
    }

    public static function getRG(){
      return self::$rg;
    }

    public static function setTelefone($valor){
      self::$telefone = $valor;
    }

    public static function getTelefone(){
      return self::$telefone;
    }

    public static function setRua($valor){
      self::$rua = $valor;
    }

    public static function getRua(){
      return self::$rua;
    }

    public static function setCidade($valor){
      self::$cidade = $valor;
    }

    public static function getCidade(){
      return self::$cidade;
    }

    public static function setBairro($valor){
      self::$bairro = $valor;
    }

    public static function getBairro(){
      return self::$bairro;
    }

    public static function setEstado($valor){
      self::$estado = $valor;
    }

    public static function getEstado(){
      return self::$estado;
    }

    public static function setCEP($valor){
      self::$cep = $valor;
    }

    public static function getCEP(){
      return self::$cep;
    }

    public static function setComplemento($valor){
      self::$complemento = $valor;
    }

    public static function getComplemento(){
      return self::$complemento;
    }

    public static function setEmpregados($valor){
      self::$empregados= $valor;
    }

    public static function getEmpregados(){
      return self::$empregados;
    }

    public static function setSalarioBruto($valor){
      self::$salarioBruto = $valor;
    }

    public static function getSalarioBruto(){
      return self::$salarioBruto;
    }

      public static function setSalarioLiquido($valor){
      self::$salarioLiquido = $valor;
    }

    public static function getSalarioLiquido(){
      return self::$salarioLiquido;
    }
    
    public static function verificarDescontos(){
      self::$valorDescontos = self::$salarioBruto - self::$salarioLiquido;
      return self::$valorDescontos;
    }

    public static function salarioAnual(){
      self::$salarioAnual = self::$salarioLiquido * 12;
      return self::$salarioAnual;
    }

    public static function verificaMEI(){
      if(self::$salarioAnual <= 81000 and self::$empregados <= 1){
        return "<b><h4>Você é apto a ser um MEI!!</h4></b>";
      }
      else if(self::$salarioAnual <= 81000){
        return "<b><h4>Para você ser apto a se tornar um MEI deverá ter no máximo um empregado!!</h4></b>";
      }
      else if(self::$empregados <= 1){
        return "<b><h4>Para você ser apto a se tornar um MEI deverá ganhar no máximo R$81.000,00 anualmente!!</h4></b>";
      }
      return "<b><h4>Você não é apto a ser um MEI!!</h4></b>";
    }

    public static function DataHorario(){
      if (self::$salarioAnual <= 81000 and self::$empregados <= 1) {
        echo "<b><h4>O cadastro foi realizado na: ";
        echo strftime('%A, %d de %B de %Y', strtotime('today'));
        echo "<br>".date('H:i:s </h4></b>');
      }
    }

    public static function Mensagem(){
      if (self::$salarioAnual <= 81000 and self::$empregados <= 1) {
        echo "<b><h4>Cadastro Realizado com Sucesso!!</h4></b>";
      }
      else {
        echo "<b><h4>Cadastro não pôde ser realizado!!</h4></b>";
      }
    }
  }
  
?>