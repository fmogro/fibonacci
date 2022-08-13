<?php
require "helpers/helpers.php";
require "helpers/mysql.php";
include "utils/utils.php";

isfromCommand();

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestInfo = getInformation($requestMethod);

$getName=$requestInfo['nombre'];
$getPosition=$requestInfo['posicion'];


$fibonacci = new Fibonacci($getPosition);
$fibonnaciNumber = $fibonacci->generateFibonacci();

$useMysql = new MySqlClass($fibonnaciNumber,$getName);
$useMysql->insertData();


if ($requestInfo['tipo']!=='json'){
    echo  "Numero: $fibonnaciNumber Nombre: $getName";
}else{
    echo  generateJson($getName,$fibonacci->generateFibonacci());
}

?>