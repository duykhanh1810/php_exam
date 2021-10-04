<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php 
    if(@$_GET['Empty']==TRUE)
    {
        ?>
        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
        <?php
    }
    ?>

    <?php 
    if(@$_GET['Invalid']==TRUE)
    {
        ?>
        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
        <?php
    }
    ?>

    <form action="part3_process.php" method="POST">
        <p>Login Form</p>
        UserName<input type="text" name="USERNAME" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username']; } ?>"><br>
        Password<input type="password" name="PASSWORD_HASH" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; } ?>"><br>
        <input type="checkbox" name="remember"> Remember Me<br>
        <input type="submit" name="Login" value="Log In">
    </form>
</body>
</html>