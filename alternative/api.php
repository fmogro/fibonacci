<?php
require 'services/class.php';
require 'services/mysql.class.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];

$apiFibonacciClass = new FibonacciClass();
$requestInformation = $apiFibonacciClass->getInformation($requestMethod);
$fibonacciNumber = $apiFibonacciClass->generateFibonacciNumber($requestInformation['posicion']);

$mysqlHelpers = new MySqlClass();
$mysqlHelpers->insertMysqlData($fibonacciNumber,$requestInformation['nombre']);


echo  "Numero: ".$fibonacciNumber . " Nombre: ".$requestInformation['nombre'];
?>