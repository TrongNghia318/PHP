<?php
   if(isset($_GET['btnSubmit']))
   {
     $uname = $_GET['name'];
    $pas = $_GET['password'];

    echo "Name: $uname Pass: $pas";
   }


?>