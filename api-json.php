<?php
require "helpers/helpers.php";
include "utils/utils.php";
require "helpers/mysql.php";

isfromCommand();

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestInfo = getInformation($requestMethod);

$getName=$requestInfo['nombre'];
$getPosition=$requestInfo['posicion'];

$useMysql = new MySqlClass($fibonnaciNumber,$getName);
$useMysql->insertData();

$fibonacci = new Fibonacci($getPosition);
echo  generateJson($getName,$fibonacci->generateFibonacci());

?>