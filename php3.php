<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="miphp.css">
  <title>PHP</title>
  
</head>

<body style="background-color: black;">

<?php
$x = 8;
$y = 5;
$z = 0;

function mysuma() {
    global $x, $y, $z; // con la palabra reservada global
    $z = $x + $y;      // puedes usar las variables declaradas
                       // fuera de la funcion 
} 

mysuma();  // run function
echo "<h2><i>Resultado de la suma: $z</i><h2>"; // output the new value for variable $z

?>

<?php

function myrest() {
    global $x, $y, $z; // con la palabra reservada global
    $z = $x - $y;      // puedes usar las variables declaradas
                       // fuera de la funcion 
} 

myrest();  // run function
echo "<h2><i>Resultado de la resta: $z</i><h2>"; // output the new value for variable $z

?>

<?php

function mymult() {
    global $x, $y, $z; // con la palabra reservada global
    $z = $x * $y;      // puedes usar las variables declaradas
                       // fuera de la funcion 
} 

mymult();  // run function
echo "<h2><i>Resultado de la multiplicacion: $z</i><h2>"; // output the new value for variable $z

?>

<?php

function mydiv() {
    global $x, $y, $z; // con la palabra reservada global
    $z = $x / $y;      // puedes usar las variables declaradas
                       // fuera de la funcion 
} 

mydiv();  // run function
echo "<h2><i>Resultado de la division: $z</i><h2>"; // output the new value for variable $z

?>


</body>

</html>

