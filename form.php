<?php

if ($_SERVER['REQUEST_METHOD']=="GET") {




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
