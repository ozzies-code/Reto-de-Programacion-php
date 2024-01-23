
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

# funciones de cadena en PHP

?>

<?php
echo "<h3><i>Longitud de la cadena: </i><h3>" . strlen("Hello world!");
echo "<br>";
echo "<h3><i>Numero de Palabras: </i><h3>" . str_word_count("Hello world!");
echo "<br>";
echo "<h3><i>cadena al reves: </i><h3>" . strrev("Hello world!");
echo "<br>";
echo "<h3><i>posicion de la palabra world: </i><h3>" . strpos("Hello world!", "world");
echo "<br>";
echo "<h3><i>Reemplazo de palabras en la cadena: </i><h3>" . str_replace("world", "Dolly", "Hello world!");
echo "<br>";
echo "<br>";
?> 


</body>

</html>

