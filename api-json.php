<?php
require "helpers/helpers.php";
include "utils/utils.php";

$getName= $_GET["nombre"];
$getPosition = $_GET["posicion"]; 

isfromCommand();
validateData($getName,$getPosition);

$fibonacci = new Fibonacci($getPosition);
echo  generateJson($getName,$fibonacci->generateFibonacci());

?>