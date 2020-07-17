<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1>ky eshte indexi i php</h1>

<a href="leksion.php" target="_blank" >Next page</a>

  <h2>

    <?php echo $text = "Ky text eshte shkruar me php";

    $var1=123;

    echo "<br>";

    var_dump($text);

    var_dump($var1);

    ?>

  </h2>

  <h2> Shuma e 2 numrave</h2>
  <?php
$var1=15;
$var2=30;
$shuma=$var1+$var2;
echo "$var1+$var2=$shuma";
echo"<br>", $var1,"+",$var2,"=",$shuma;
echo "<br> <br>";


$cars = array("Volvo".,"BMW","Mercedes");

#per te indeksuar BMW
echo $cars[1];

$colors=array(
  "White"=>"#fffff",
  "Black"=>"#00000",
  "Red"=>"#ff0000"
);

#per te indeksuar/afishuar #ff0000
echo $colors["Red"];


echo "<pre>";
var_dump($colors);
echo "</pre>";


//metodat e strings

#strlen(string)->gjen madhesine e stringut


$str1="Sot eshte e premte";

$size = strlen($str1);
echo "Madhesia e stringut eshte $size";


#str_word_count(string) ->numeron fjalet ne nje string

$count = str_word_count($str1);
echo "<br>Fjalia ka $count fjale";


# strrev(string)-> e sjell mbrapsht
$tshembra = strrev($str1);
echo "<br> $str1 eshte $tshembra";


#str_replace(hiqet, vendoset, stringu) -> zevendeson fjalet

$zhvendos = str_replace("premte", "shtune", $str1);
echo "<br> fjalia e re eshte: $zhvendos ";


# strpos(stringu,fjala )->kthen pozicionin nese gjendet , nese nuk gjendet false (bool)

$pos= strpos($str1, "Sot");
echo "<br> Sot gjendet ne pozicionin $pos";


#abs(x) -> kthen vleren absolute te nje numri

$nr1= -22;

$nr2=$nr1+$nr1;

$abs= abs($nr1);

echo $abs. "<br>";

echo "Vlere absolute e -22+3 eshte: abs(-22+3)";

echo "<br> $nr1+$nr1 eshte e barabarte me $nr2";

echo '<br>' . $nr1 . '+' .$nr1 . 'eshte e barabarte me' .$nr2 . '!';


#sqrt(x) -> kthen rrenjen e numrit

$sqrt = sqrt(-21);

echo'<br>';
var_dump(is_int($sqrt));
#is_int(x)->nxjerr true nese variabla eshte integer, ne te kundert false
echo"<br> Rrenja e $abs eshte $sqrt.";

#rand() -> gjeneron nje numer random

echo '<br> Nje numer rastesor eshte:' . rand();




#|Gjetja e rrenjeve ne ekuacion te fuqise se pare
#x^2 - 5x + 6= 0;

$a = 1;
$b = -5;
$c = 6;

$Dallori =pow($b, 2) -(4*$a*$c);
echo"<br>" . $Dallori;

if($Dallori>0){

  $x1 = (-$b + sqrt($Dallori))/2*$a;
  $x2 = (-$b - sqrt($Dallori))/2*$a;

  echo "Rrenjet e ekuacionit jane: $x1 dhe $x2";
}

else if(Dallori==0){
  $x1 = -$b/(2*$a);
  echo "<br> Ekuacioni ka 1 rrenje qe eshte: $x1";
}
else
echo"<br> ekuacioni nuk ka zgjidhje";


#switch case








?>

  </body>
</html>
