<?php
// Integers یا اعداد صحیح
$x = 5985;
var_dump(is_int($x)); // با دستو ایس اینت میشود هر عددی که غیر اینت باشد تبدیل به اینتش کرد مثل فلوت 

$x = 59.85;
var_dump(is_int($x));

#______________________________
// Float یا اعداد اعشاری

$x = 10.365;
var_dump(is_float($x));//با دستو ایس فلوت میشود هر عددی که غیر فلوت باشد تبدیل به فلوتش کرد مثل اینت

#_____________________________
// Infinity یا بینهایت

$x = 1.9e411;
var_dump($x); 
#_____________________________
// NaN یا بدون عدد
$x = acos(8);
var_dump($x);
#_____________________________

// Numerical Strings
//اگر متغیر یک عدد یا یک رشته عددی باشد، تابع true را برمی گرداند، در غیر این صورت false.$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
#_____________________________

// PHP Casting Strings and Floats to Integers  پی اچ پی اعداد اعشار و متن ها را به اینت تبدیل می کند
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
#_____________________________




?>