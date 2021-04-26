<?php
include_once "src/User.php";
include_once "src/UserManager.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $password = $_POST["password"];

    $data = [
        'user' => $user,
        'password'=>$password
    ];
    $userManager = new UserManager('data.json');
    if ($userManager->checkRegister($user)){
        $userManager->register($data);
        echo "dang ki thanh cong";
    }else{
        echo "tai khoan da duoc dang ki";
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
</head>
<body>
<form method="post">
    <table style="background: darkgray">
        <tr>
            <td>User:</td>
            <td><input type="text" name="user" placeholder="UserName"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="password"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Register</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
