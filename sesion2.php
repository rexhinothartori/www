
<?php
session_start()

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

echo "sesioni user e ka vleren" . $_SESSION ['user'];
echo "<br> sesioni email e ka vleren " . $_SESSION ['email'];

//session_unset();
//session_destroy();


 ?>

 <br>
 <hr>

 <?php

require "Person.php";

$obj = new Person;

/*
$obj->emer='John';

$obj->mbiemer='Smith';

echo"<br>" . $obj->afisho();

echo"<br>";
var_dump($obj);
echo "</pre>";

$obj2=new Person;

$obj2->emer='Xhemile';

$obj2->mbiemer='Zyle';

echo "<br>" .$obj2->afisho();
*/
$obj->set_name("Cole");
echo "Yesterday it was so cold";

  ?>
</body>

</html>
