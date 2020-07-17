<?php
session_start(); //gjithmone pra tagut html



 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesionet</title>
  </head>
  <body>

<!--Vendosja e sesionit -->
<?php
$_SESSION['user'] = 'Tarzan';
$_SESSION['email'] = 'example@gmail.com';

var_dump($_SESSION);

 ?>

<a href="sesion2.php" target="_blank" >Next page</a>


  </body>
</html>
