<?php
function myFunction()
{
    //khai bao bien static
    static $staticVar = 10;
    //khai bao bien thuong
    $normalVar = 10;

    $staticVar++;
    $normalVar++;

    echo "<br>StaticVar is ".$staticVar;
    echo "<br> normalVar is ".$normalVar;

}

//goi ham
myFunction();
myFunction();
myFunction();
//static set lien tuc set lai gia tri theo gia tri moi nhat 11->12->13


?>