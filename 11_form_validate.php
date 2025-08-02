<?php
    $nameError = $passError =$confirmPassError = $emailError ="";
    if (isset($_POST['btnRegister']))

    {
        
        $uname = $_POST['name'];
        if(!preg_match("/^[a-zA-Z]\w+$/",$uname))
        {
            //bao loi
            $nameError = "username: bat dau bang chu cai va co 2 ky tu";
        }

        //password : batky ky tu nao , it nhat 3 ky tu
        $pass = $_POST['password'];
        if(!preg_match("/^.{3,}$/",$pass))
        {
            //bao loi
            $passError = "batky ky tu nao it nhat 3 ky tu";

        }

        //trung vs password
        $confirmPass = $_POST['confirmPassword'];
        if($pass != $confirmPass)
        {
            //bao loi
            $confirmPassError = "confirmPass phai trung vs password";
        }

        $email = $_POST['email'];
        if(!preg_match("/^\w+@\w+\.\w+$/", $email))
        {
            //bao loi
            $emailError = "email chua dung dinh dang";
        }

        if($nameError == "" && $passError == ""&& $confirmPassError == "" && $emailError =="")
        {
            echo "ban da dang ky thanh cong";
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
        .error {
            color:red;
        }
    </style>
</head>
<body>
    <h1>Register</h1>

    <form action="11_form_validate.php" method="post">
        <div>
            UserName: <input type="text" name="name">
            <span class="error"><?php echo $nameError; ?></span>
        </div>

        <div>
            Password: <input type="password" name="password">
            <span class="error"><?php echo $passError; ?></span>
        </div>

        <div>
            ConfirmPassword: <input type="password" name="confirmPassword">
            <span class="error"><?php echo $confirmPassError; ?></span>
        </div>

        <div>
            Email: <input type="email" name="email">
            <span class="error"><?php echo $emailError; ?></span>
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