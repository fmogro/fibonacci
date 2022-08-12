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

?>