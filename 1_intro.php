<?php

//khai bao bien
$name = "FPT Aptech";
$age = 26;


//in gia tri cac bien ra man hinh
echo "Ten toi la: " . $name;
print '<br>Tuoi cua toi la: '.$age;

echo "<br> Ten toi la $name";// dung nháy đôi thì k cần dấu "." để nối chuỗi
echo '<br> Tuoi toi la $name'; //dùng dấu  nháy đơn thì phải có "."  để nối

//khai báo hằng số
define("MY_NAME","FPT");
const myname="FPT";

echo "<br>Ten ban la: ".MY_NAME;
echo "<br>Ten ban la: ".myname;

echo "<br>Ban dang o line so ".__LINE__;
echo "<br>Ban dang o file ".__FILE__;



?>