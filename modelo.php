<?php
  class Calculadora{
    
    private $valor1;
    private $valor2;
    private $operador;

    public function __construct($valor1 = 0, $valor2 = 0, $operador = ""){
      $this->valor1 = $valor1;
      $this->valor2 = $valor2;
      $this->operador = $operador;
    }

    public function sumar(){
      return $this->valor1 + $this->valor2;
    }

    public function restar(){
      return $this->valor1 - $this->valor2;
    }

    public function multiplicar(){
      return $this->valor1 * $this->valor2;
    }

    public function dividir(){
      return $this->valor1 / $this->valor2;
    }

    public function factorialIter($numero) {
      $resultado = 1;
      for ($i = 1; $i <= $numero; $i++) {
          $resultado *= $i;
      }
      return $resultado;
  }
    
    public function factorialRecu($numero) {
      if ($numero < 0) {
          return "NO pots fer recursiu amb nombres negatius";
      }
      if($numero == 0){
          return 1;
      }else{
        return $numero * $this->factorialRecu($numero - 1);
      }
    }
  

    public function sumarString(){
      return $this->valor1.$this->valor2;
    }

    public function restarString(){
      
      $result = stripos($this->valor1,$this->valor2);
      if($result !== false ){
        return str_replace($this->valor2,"",$this->valor1);   
      }else{
        return $this->valor2;
      }
    }

    public function historialArray(){
      return $this->valor1." ". $this->operador." ".$this->valor2;

    }

    public function imprimirHisorial($miArray){
      foreach ($miArray as $valor) {
        $historial .= "<li>$valor</li>"; 
    }
        return $historial;
    }

    function getValor1(){
      return $this->valor1;
    }

    function getValor2(){
      return $this->valor2;
    }

    }
    
  




  
?>