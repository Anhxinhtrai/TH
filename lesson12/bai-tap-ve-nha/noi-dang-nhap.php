
<?php
session_start();
if (isset($_SESSION["user"])){
    echo "xin chao " . $_SESSION["user"];
}else{
    header("location: login.php");
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
    <button type="submit" name="logout">Log Out</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["logout"])){
        session_destroy();
        header("location: login.php");
    }
}
?>
