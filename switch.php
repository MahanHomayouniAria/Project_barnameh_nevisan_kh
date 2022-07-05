<?php
/* 
switch سوییچ یک عبارت برای شروع یک شرط است 
case یک شرط است
break برای این استفاده میشود گه وقتی که شرط اجرا شد دیگر نیاز به اجرای بقیه نیست
*/

//یک نمومخ از سوییچ
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
 


?>