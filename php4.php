<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="miphp.css">
  <title>PHP</title>
  
</head>

<body>

<?php

/*
uso de variable superglobales
para operaciones basicas
de la aritmetica
*/

?>

<?php
$x = 5;
$y = 10;
$z = 0;

function mysuma() {//Funcion Suma
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

mysuma();
echo "<h2><i>Resultado de la suma: $z</i><h2>";

function myrest() {//Funcion Resta
    $GLOBALS['z'] = $GLOBALS['x'] - $GLOBALS['y'];
} 

myrest();
echo "<h2><i>Resultado de la resta: $z</i><h2>";

function mymult() {//Funcion Multiplicacion
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
} 

mymult();
echo "<h2><i>Resultado de la multiplicacion: $z</i><h2>";

function mydiv() {//Funcion Division
    $GLOBALS['z'] = $GLOBALS['x'] / $GLOBALS['y'];
} 

mydiv();
echo "<h2><i>Resultado de la division: $z</i><h2>";
?>

</body>

</html>

