<?php
$name = "FPT Aptech";

$result=mb_ereg("^F\w+\s\w+$",$name);
echo "Result is $result";

$result2=mb_ereg("^f\w+\s\w+$",$name);//mb_ereg k nhan f thuong
echo "<br>Result is $result2";

$result2=mb_eregi("^f\w+\s\w+$",$name);//mb_eregi nhan ca f hoa va f thuong
echo "<br>Result is $result2";

$email = "fptaptech1999@gmail.com";
echo "<br>$email";
$result3 = mb_ereg_replace("\d+","2025",$email);
echo "<br>$result3";

//split: cat chuoi thanh mang
$newArr = mb_split("\s",$name);
echo "<br>New Array is: ";
print_r($newArr);

//perl
$result = preg_match("/^F\w+\s\w+$/",$name);//preg-match phải có dấu '/' bao quanh
echo "<br> result is $result";

$result2 = preg_match("/^f\w+\s\w+$/i",$name);
echo "<br> result2 is $result2";

$result3 = preg_replace("/\d+/",2025,$email);
echo "<br>result3 is $result3";

$newArr = preg_split("/\s/",$name);
echo "<br>newArray is: ";
print_r($newArr);
?>