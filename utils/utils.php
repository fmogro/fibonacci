<?php


/**
 * Function that receive name and position and validate if exist
 * @name = name of the person
 * @position = fibonacci position
 */
function validateData($name,$position){
    if (!$name || !$position){
        echo "Faltan datos";
        die();
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


?>