<?php

/**
* This class contain the helpers for API Rest
*
* @author     Felipe Mogro
* @version    1.0.1
* 
*/

class FibonacciClass{

    /**
     * Generate Fibonacci Number
     */
    function generateFibonacciNumber($position){
        $fibonacci  = [0,1];
 
        for($i=2;$i<=$position;$i++){
            $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
        }
        return $fibonacci[$position];
    }

    /**
    * Function that validate method and send the data to array format
    **/  
    function getInformation($method){
        switch ($method) {
            case 'POST':
                $responseRequest = $this->validateMethod($_POST);  
                break;
            case 'GET':
                $responseRequest =$this->validateMethod($_GET);  
                break;
            }
        return $responseRequest;
    }

    /**
    * Function that validate Request Method and return the array data
    */
    function validateMethod($methodData){
        $this->validateData($methodData['nombre'],$methodData['posicion']);
        $methodData = array(
                        'nombre'=>$methodData['nombre'],
                        'posicion'=>$methodData['posicion']
                    );
    return $methodData;
  }


    /**
     * Function that receive name and position and validate if exist
     * @name = name of the person
     * @position = fibonacci position
     */
    function validateData($name,$position){
        switch (true) {
            case (!$name and $position):
                echo 'El campo nombre es requerido';
                die();
                break;
            case ($name and !$position);
                echo 'El campo posicion es requerido';
                die();
                break;
            case (!$name and !$position);
                echo 'Los campos nombre y posicion son requeridos';
                die();
                break;
        }
    }
}

  