<?php
require "helpers/helpers.php";
include "utils/utils.php";

isfromCommand();

$getName= $_GET["nombre"];
$getPosition = $_GET["posicion"]; 

validateData($getName,$getPosition);

$fibonacci = new Fibonacci($getPosition);
$fibonnaciNumber = $fibonacci->generateFibonacci();

echo  "Numero: $fibonnaciNumber Nombre: $getName";

?>