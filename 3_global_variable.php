<?php
//khai bao bien toan cuc
$y=1;
function myGlobal()
{
   global $y;
   $y++;
   echo "bien y la $y";
}


//goi ham
myGlobal();

//in bien x o ngoai ham -> error
echo "<br>Bien Y o ngoai ham la $y";


?>