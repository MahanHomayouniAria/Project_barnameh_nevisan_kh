<?php
// function برای انجام یک کار استفاده میشود از فانکشن به تعداد زیاد میشه در کد استفاده کرد
function writeMsg() {  // یک نمونه از فانکشن که بعد کلمه فانکشن باید نام اون فانشن رو بذاریم
    echo "Hello world!"; //اینجا کاری که قرارا داخل فانکشن انجام بشه رو مینویسیم
  }
  
  writeMsg(); // در اینجا نام فانکشن را صدا کردیم و در اینجا خروج میگیریم

  #__________________________________

  function familyName($fname) { //یک نمونه از فانکشن کامل تر
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");
#_________________________________________
function familyName($fname, $year) {      // یک نمونه از فانکشن که دوتا آرگومان ورودی میگیرد
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName("Hege", "1975");
  familyName("Stale", "1978");
  familyName("Kai Jim", "1983");
#_____________________________________________
function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, "5 days");
#____________________________________________
declare(strict_types=1); // این عبارت دیتا تایپ را ثابت می کند

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
#_________________________________________________پ
declare(strict_types=1); // این عبارت دیتا تایپ را ثابت می کند
function setHeight(int $minheight = 50) { //در اینجا مقدار پیشفرض را پنجاه قراردادیم
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // در اینجا از مقدار پیشفرض استفاده میکنیم
setHeight(135);
setHeight(80);
#__________________________________________________________
declare(strict_types=1); 
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
#______________________________________________________________



?>