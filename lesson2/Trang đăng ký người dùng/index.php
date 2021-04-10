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
<form action="" method="post" style="width: 50%">
    <fieldset>
        <legend>đăng kí</legend>
        <input type="text" name="username" placeholder="User"> <br>
        <input type="email" name="email" placeholder="Email"> <br>
        <input type="number" name="phone" placeholder="Phone"> <br>
        <input type="submit">
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
$user= $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
}
if (empty($user) || empty($email) || empty($phone)){
     echo "hãy điền đầy đủ thông tin";
}else{
    echo "oke";
}
?>
</body>
</html>