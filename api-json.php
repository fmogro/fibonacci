<?php
require "helpers/helpers.php";
include "utils/utils.php";

isfromCommand();

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestInfo = getInformation($requestMethod);

$getName=$requestInfo['nombre'];
$getPosition=$requestInfo['posicion'];

$fibonacci = new Fibonacci($getPosition);
echo  generateJson($getName,$fibonacci->generateFibonacci());

?>