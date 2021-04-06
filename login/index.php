<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <h2>Login</h2>
    <input type="text" name="user">
    <input type="password" name="password">
    <input type="submit" VALUE="login">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $user = $_POST['user'];
    $passwork = $_POST['password'];
    if ($user === "admin" && $passwork ==="123"){
        echo " dang nhap thanh cong ";
    }

}
?>
</body>
</html>