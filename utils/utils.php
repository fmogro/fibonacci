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

?>