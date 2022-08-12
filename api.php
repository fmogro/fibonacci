<?php
require "helpers/helpers.php";
include "utils/utils.php";

isfromCommand();

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestInfo = getInformation($requestMethod);

$getName=$requestInfo['nombre'];
$getPosition=$requestInfo['posicion'];


$fibonacci = new Fibonacci($getPosition);
$fibonnaciNumber = $fibonacci->generateFibonacci();

if ($requestInfo['tipo']!=='json'){
    echo  "Numero: $fibonnaciNumber Nombre: $getName";
}else{
    echo  generateJson($getName,$fibonacci->generateFibonacci());
}

?>