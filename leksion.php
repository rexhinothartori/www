


<?php

$name="";

function text_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
}

//if ($_SERVER['REQUEST_METHOD']=="GET") {
if (isset($POST) && !empty($_POST)){
  if (empty($POST['EMRI'])) {
    $nameErr = "TE LUTEM SHKRUAJ EMRIN!";
  }




$name = $_REQUEST['emri'];
if ($name =='' || !$name){
  echo "si e ke emrin???";
  die;
}

$l_name = $_REQUEST['mbiemri'];

if (!$l_name || empty($l_name)) {
echo "si e ke mbiemrin";
die;
}


echo "Welcome, $name $l_name";


}




 ?>









<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </head>

  <body>

<div class="container my-4">
  <h1 class="text-center">PHP</h1>

<?php
#switch case








$dita= "e merkure";


switch($dita){

  case "e hene":
  echo "<br> <p class='text-center'> Sot eshte e hene</p>";
  break;

  case "e merkure":
  echo "<br><p class='text-center'> sot eshte e merkure</p>";
  break;


  default :
  echo " <p class='text-center'>Nuk e dime ca dite eshte</p>";


}

#KONSTANTET

define("GOOGLE_URL", "https://www.google.com");

echo 'Thank you for visiting-> ' . GOOGLE_URL . '<br>';


#Ciklet ne php



?>
<div class="container my-4">
  <div class="row-border m-3">
    <?php

      $cookieName='user';
      $cookieValue = 'Tarzan';
      setCookie($cookieName, $cookieValue, time() + 86400,  '/');
      setCookie($cookieName, $cookieValue, time() - 86400,  '/');



    if (isset($_COOKIE[$cookieName])){
      echo "<h4> Cookie me emrin $cookieName eshte vendosur dhe e ka vleren $_COOKIE[$cookieName]";
    }
    else{
      echo "<h4>Cookie me emrin $cookieName nuk eshte vendosur </h4>";
    }


    ?>
</div>

<div class="row border m-3">
  <?php




  echo "data sot eshte " .date("d-m-y");
    echo  "<br> Ora eshte " .date("h-i-sa");



   ?>
</div>

<div class= "row">
  <div class="col-md-3">

  <?php

#Ciklet ne php
  echo "<h5 style='color:red' > afishoni numrat nga 1 deri ne 10 </h5>";

    $nr = 1;

    while($nr <= 10){

      echo $nr . '<br>';
      $nr++;

    }


    ?>

  </div>

<div class="col-md-3 text-center">
<h5 style="color:blue">Numrat nga 0-100 me hap 10</h5>

<?php

$nr2=0;

while($nr2<=100){

  echo $nr2 . '<br>';
  $nr2=$nr2+10;
}

 ?>



</div>

<div class="col-md-3 text-center">
  <h5>Cikli me for</h5>

  <?php

  for($i=0; $i<=100; $i=$i+10)

  echo $i . '<br>';



   ?>


</div>

<div class="col-md-3 text-center">
  <h5 style="color:green">Cikli me for</h5>

  <?php

  for($i=100; $i>=0; $i=$i-10){
    echo $i . '<br>';
  }



   ?>





</div>

</div>

<div class="row mt-3 border">
  <div class="col-md-4">
    <h5> Ciklet ne arrays </h5>

    <?php
/*$arr=array(" <br> e hene", " <br> e marte"," <br> e merkure");
$i=0;
for ($i=2; $i>=0; $i--){
  echo $arr[$i];
}*/


#Madhesia e array : sizeof($arr)

$cars = array("<br> Mercedez",  " <br> Wolsvagen",  " <br> Mustang");

foreach ($cars as $key => $item){
  echo   $item .  "ndodhet ne pozicionin :   $key   <br>";

}
     ?>
  </div>

<div class="col-md-4">

<?php

$colors=array(
  "White"=>"#fffff",
  "Black"=>"#00000",
  "Red"=>"#ff0000"
);

foreach($colors as $key =>$item){
  echo "<p style ='color . $item'>
  $key ka kodin: $item </p>";
}

 ?>

 <p>Ngjyrat</p>
 <p style="color:#ff0000;">I am red</p>
 <p style="color:#00000;">I am black</p>


 </div>

 <div class="col-md-4">

<?php

$sum=0;
for($i=1;$i<=10;$i++){
  if($i==10){
    echo $i . '=';
  }
  else {
    echo $i . '+';}
    $sum= $sum + $i;

}

echo $sum;


$makinat = array(
  array("Volvo",30,7),
  array("BMW" ,40, 32),
  array("Fiat" ,36 ,20),
);

 ?>

<div class="row">
<table>
<tr>
  <th> Makinat </th>
  <th> Sasia </th>
  <th> Shitur </th>

</tr>

<?php
for($i=0; $i < 3; $i++){
  echo "<tr>";
  for($j=0;$j<3; $j++){
    echo"<td>";

    echo $makinat[$i] [$j];
    echo "</td>";
  }
  echo "</tr>";
}
 ?>

 </table>
</div>

 </div>

 <?php

function emrifamiljes($name){
  echo "<br> This is $name Mrroklla";
}

emrifamiljes(' Haziz');
emrifamiljes(' Shyqo');
emrifamiljes(' Xhemile');


function emrifamiljes1($name, $dtl){
  echo "<br> $name Mrroklla ka lindur ne $dtl";
}

emrifamiljes1(' Haziz', '1966');
emrifamiljes1(' Shyqo', '1972');
emrifamiljes1(' Xhemile', '1980');




  ?>

<hr>
<div class="row border py-2 my-3">

<div class="col-md-3">
<?php


$a=4;
$b=3;

function sum($x1, $x2){
return($x1+$x2);
}

echo sum(6, 7);
echo "<br>";
echo sum($a, $b);



 ?>

</div>

<div class="col-md0-3">

<?php
$a = 30 ;
$b = 45 ;

function shtim(){
$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
//var_dump($GLOBALS);

}

shtim();
echo $c;

//ECHO $_SERVER['PHP_SELF']

 ?>


</div>



</div>
</hr>


</div>

<div class="row my-3 p-2 border">
<form action="form.php" method="get">

Name*: <span class="error"> <?php echo $nameErr; ?> </span>
<input type="text" class="form-control" name="emri" placeholder="vendos emrin">

Last name*:<span class="error"> <?php echo $l_nameErr; ?></span>
<input type="text" class="form-control" name="mbiemri" placeholder="vendos mbiemri">

<button type="submit" class="btn btn-success my-2" name="submit">Dergo</button>

</form>




</div>


</div>

  </body>

</html>
