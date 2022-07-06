<?php
/*
انواع دیتا تایپ در پی اچ پی
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource*/

#_______________
//String یا متن ها
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;

#___________________________

//Integer یا اعداد صحیح
$x = 5985;
var_dump($x);

#_____________________________

//Float یا اعداد اعشاری

$x = 10.365;
var_dump($x);

#_____________________________

//Boolean یا صحیح و غلط 
$x = true; //درست
$y = false; // غلط

#_______________________________

//Array بیشتر یک مقدار را در خود نگه میدارد

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

#____________________________________

//Object یا شئ گرایی در پی اچ پی

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();


#______________________________________
// NULL یا بی مقدار یا خالی
$x = "Hello world!";
$x = null;
var_dump($x);
#________________________________________






?>