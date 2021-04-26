<?php
include_once "src/Admin.php";
include_once "src/AdminManager.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];

$data = [
    'name' => $name,
    'password' => $password
];
$admin = new \App\AdminManager('admin.json');
try {

    if ($admin->checkRegister($name)) {
        $admin->register($data);
        echo "<font color='aqua'>đăng kí thành công , bấm vào đây để </font> <a href='login.php'><font color='red'>đăng nhập</font></a>";
    }else{
        throw new Exception("<font color='red'>Tài khoản của bạn chưa được đăng kí</font>");
    }
}
catch
    (Exception $exception){
        echo $exception->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style-form.css">
</head>
<body>
<div class="login">
    <h1>Register</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Register</button>
    </form>
</div>
</body>
</html>
