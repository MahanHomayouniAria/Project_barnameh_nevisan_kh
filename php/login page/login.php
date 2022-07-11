<?php
if(in_array( ["Javad" , "Mahan" , "Amir"] , $_GET["username"] , TRUE)){
    echo "شما وارد شدید";
}else{
    echo "نام کاربری صحیح نیست";
}
if(in_array([123456] , $_GET["password"] , TRUE)){
    echo "پسورد صحیح است";

}else{
    echo "پسورد وارد شده غلط است";
}


?>