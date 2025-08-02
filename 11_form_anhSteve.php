
<?php 
    $nameErr = $passErr = $confirmPassErr = $emailErr = "";

if(isset($_POST['btnRegister']))
{
    //username: bắt đầu là chữ cái, ít nhất là 2 ký tự
    $uname = $_POST['name'];
    if(!preg_match("/^[a-zA-Z]\w+$/", $uname)) //biểu thức chính quy Regular Expression
    {
        //báo lỗi
        $nameErr = "username: bắt đầu là chữ cái, ít nhất là 2 ký tự";
    }
    $pass = $_POST['password'];
    if(!preg_match("/^.{3,}$/", $pass)) //biểu thức chính quy Regular Expression
    {
        //báo lỗi
        $passErr = "Password có ít nhất 3 ký tự";
    }

    //confirmPass: trùng với Password
    $confirmPass = $_POST['confirmPassword'];
    if($pass !== $confirmPass)  
    {
        $confirmPassErr = "ConfirmPass phải trùng với Password";
    }

    //email: aa@aaa.com
    $email = $_POST['email'];
    if(!preg_match("/^\w+@\w+\.\w+$/", $email))
    {
        //báo lỗi
        $emailErr = "Email chưa đúng định dạng";
    }

    if($nameErr == "" && $passErr == "" && $confirmPassErr == "" && $emailErr == "")
    {
        echo "Đăng ký thành công!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validate</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
    <form action="11_form_anhSteve.php" method="post">
        <div>
            UserName: <input type="text" name="name">
            <span class="error"><?php echo $nameErr;?></span>
        </div>
        <div>
            Password: <input type="password" name="password">
            <span class="error"><?php echo $passErr;?></span>
        </div>
           <div>
            Confirm Password: <input type="password" name="confirmPassword">
            <span class="error"><?php echo $confirmPassErr;?></span>
        </div>
        <div>
            Email: <input type="email" name="email">
            <span class="error"><?php echo $emailErr;?></span>
        </div>
        <div>
            Birthday: <input type="date" name="birthday">
        </div>
        <div>
            <input type="submit" value="Register" name="btnRegister">
        </div>
    </form>
</body>
</html>

DDict Logo