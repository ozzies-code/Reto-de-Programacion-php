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
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");

function myword() {
  echo "<br>";
  echo "<b><i>" . GREETING . "</i></b>";
} 
myword();
?> 


 
</body>

</html>

