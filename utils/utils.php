<?php


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

/**
 * Function that generate Json for second API Rest
 */
function generateJson($name,$fibonnaciNumber){
    $jsonArray = array('Numero'=>$fibonnaciNumber,'Nombre'=>$name);
    header('Content-type: application/json');
    return json_encode($jsonArray)  ;
}

/**
 * Prevent to execute from command line
 * This function die the script when its be execute from php command line
 */
 function isfromCommand(){
     if(PHP_SAPI == 'cli') {
         echo "Error, este script no puede ejecutar este error desde la linea de comandos\n";
         die();
     }
 }


 /**
  * Function that validate Request Method and return the array data
  */

  function validateMethod($methodData){
    validateData($methodData['nombre'],$methodData['posicion']);
    $methodData = array('nombre'=>$methodData['nombre'],'posicion'=>$methodData['posicion']);
    return $methodData;
  }


/**
 * Function that validate method and send the data to array format
 **/  
  function getInformation($dataSwitch){
    switch ($dataSwitch) {
        case 'POST':
            $responseRequest = validateMethod($_POST);  
            break;
        case 'GET':
            $responseRequest = validateMethod($_GET);  
            break;
        }
    return $responseRequest;
  }

?>