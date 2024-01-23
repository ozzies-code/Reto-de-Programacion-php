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

# This is first comment in a PHP Program

?>

<?php  
$x = 5985;
$y = 10.365;
echo "<br>";
echo "<br>"; 
var_dump($x);
echo "<br>";
echo "<br>";
var_dump($y);
$cars = array("Volvo","BMW","Toyota");
echo "<br>";
echo "<br>";
var_dump($cars);
#podemos usar la funcion var_dump para ver el contenido de un arreglo#
echo "<br>";
echo "<br>";
$a = "Hello world!";
$a = null;
//Se mostrara el valor mas reciente sobre la variable x
var_dump($a);
?> 

</body>

</html>

