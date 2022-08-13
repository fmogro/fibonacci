<?php
require 'services/class.php';
$requestMethod = $_SERVER['REQUEST_METHOD'];

$apiFibonacciClass = new FibonacciClass();
$requestInformation = $apiFibonacciClass->getInformation($requestMethod);
$fibonacciNumber = $apiFibonacciClass->generateFibonacciNumber($requestInformation['posicion']);

echo  "Numero: ".$fibonacciNumber . " Nombre: ".$requestInformation['nombre'];
?>