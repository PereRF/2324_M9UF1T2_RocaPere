<?php

session_start();

if (!isset($_SESSION['historial'])) {
    $_SESSION['historial'] = array(); 
}

    const FACTORIAL = '1';

    if (isset($_POST['campo1'])) {
        $campo1 = $_POST['campo1'];
        $campo2 = $_POST['campo2'];
        $operador = $_POST['operador'];

    }

    require 'modelo.php';

    $testobjeto = new Calculadora($campo1, $campo2, $operador);
 
        switch ($operador) {
            case "+":
                if(empty($campo1) || empty($campo2)){
                    $error = "Has d'introduir dos valors per fer esta operació";
                    break;             
                }else{            
                    if(!is_numeric($campo1) || !is_numeric($campo2)){
                        $resultado = $testobjeto->sumarString();
                        $array = $testobjeto->historialArray()." = ".$resultado;
                        break;                       
                    }else{                       
                        $resultado = $testobjeto->sumar();
                        $array = $testobjeto->historialArray()." = ".$resultado;
                        break;
                    }
                }
                break;
            case "-":
                if(empty($campo1) || empty($campo2)){
                    $error = "Has d'introduir dos valors per fer esta operació";
                    break;             
                }else{
                               
                    if(is_numeric($campo1) && is_numeric($campo2)){
                        
                        $resultado = $testobjeto->restar();
                        $array = $testobjeto->historialArray()." = ".$resultado;

                        break; 
                                             
                    }else{ 
                        $resta = $testobjeto->restarString();
                        if($resta == $campo2){
                            $error = "No hem trobat l'estring ".$campo2." a l'estring ".$campo1;
                            break;
                        }else{

                            $resultado = $resta;
                            $array = $testobjeto->historialArray()." = ".$resultado;
                            break;
                        
                        } 
                    }
                }
                break;
            case "*":
                if(empty($campo1) || empty($campo2)){
                    $error = "Has d'introduir dos valors per fer esta operació";
                    break;              
                }else{
                    if(is_numeric($campo1) && is_numeric($campo2)){

                        $resultado = $testobjeto->multiplicar();
                        $array = $testobjeto->historialArray()." = ".$resultado;
                        break; 

                    }else{
                        $error = "Has d'introduir numeros per fer esta operació";
                        break;
                    }
                
                }
            case "/":
                if(empty($campo1) || empty($campo2)){
                    $error = "Has d'introduir dos valors per fer esta operació";
                    break;              
                }else{
                    if(is_numeric($campo1) && is_numeric($campo2)){

                        $resultado = $testobjeto->dividir();
                        $array = $testobjeto->historialArray()." = ".$resultado;
                        break; 

                    }else{
                        $error = "Has d'introduir numeros per fer esta operació";
                        break;
                    }
                
                }
            case "n!":
                if(!empty($campo2)){
                    $error = "Has d'introduir un valor numéric al primer camp per realitzar l'operació";
                    break;              
                }
                elseif (!is_numeric($campo1)) {
                    $error = "Has d'introduir un número al primer camp";
                    break;
                }else{
                if(FACTORIAL == '1'){
                $resultado = $testobjeto->factorialIter($testobjeto->getValor1());
                $array = $testobjeto->historialArray()." = ".$resultado;
                break;
                }else{
                $resultado = $testobjeto->factorialRecu($testobjeto->getValor1());
                $array = $testobjeto->historialArray()." = ".$resultado;
                break;
                }
            }
            case "Borrar Historial":
                unset($_SESSION['historial']);
                break;
            default:
                $error = "Opción no válida";
                break;
        }

        
        if(isset($_SESSION['historial'])){

            if(!isset($error) && ((isset($resultado))) || (isset($array))){
                array_unshift($_SESSION['historial'], $array);
            }
            $historialtest = $testobjeto->imprimirHisorial($_SESSION['historial']); 
        }
            


    

    

    require 'vista_bootstrap.php';
    

    $campo1 = "";
    $campo2 = "";
    $operador = "";


    ?>