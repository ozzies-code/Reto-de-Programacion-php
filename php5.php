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

//la palabra reservada static 
//conserva los datos en memoria 

?>

<?php
function mycontador() {
    static $x = 0;
    echo $x;
    $x++;
}

echo "<b><i>Resultado del contador:</i></b> ";

mycontador();
echo "<br>";
echo "<b><i>Resultado del contador:</i></b> ";
mycontador();
echo "<br>";
echo "<b><i>Resultado del contador:</i></b> ";
mycontador();
echo "<br>";

?>

</body>

</html>

