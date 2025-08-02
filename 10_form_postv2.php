<?php
   if(isset($_POST['btnSubmit']))
   {
     $uname = $_POST['name'];
    $pas = $_POST['password'];

    echo "Name: $uname Pass: $pas";
   }
   else
   {
?>
 <form action="10_form_postv2.php" method="post">
        Name: <input type="text" name="name"><br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="Submit" name="btnSubmit">
    </form>
<?php
   }
?>




   

