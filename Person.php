<?php
class Person{

public $emer = 'Tarzan'  ;
public $mbiemer = 'Cole' ;

public function afisho(){

return ("Emri i personit eshte $this->emer  $this->mbiemer");

}

private $name;
private $surname;

public function set_name($mbiemri){

$this->$mbiemri=$mbiemri;
echo "$this->mbiemer";
}

public function get_name(){
  return $this->mbiemer;
}







}
echo 123;


 ?>
