<?php
 include_once "src/AdminManager.php";
 include_once "src/Admin.php";

 session_start();
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
       $name = $_REQUEST['name'];
       $password = $_REQUEST['password'];

       $adminManager = new \App\AdminManager('admin.json');
       $admin = $adminManager->checkLogin($name,$password);
       echo $admin;
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
    <link rel="stylesheet" href="style-form.css"    >
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
    <span style="color: #ffffff">nếu chưa có tài khoản , hãy  <a href="register-admin.php"><font color="red">đăng kí</font></a></span>
</div>
</body>
</html>

