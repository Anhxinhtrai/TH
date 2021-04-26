<?php
include_once "src/UserManager.php";
include_once "src/User.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST["user"];
    $password = $_POST["password"];

    $userManager = new UserManager('data.json');
    $users = $userManager->checkUser($user,$password);
    echo $users;
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form method="post">
        <input type="text" name="user" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>
</body>
</html>
