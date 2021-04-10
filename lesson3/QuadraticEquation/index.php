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
<form method="post" style="width: 40%">
    <fieldset>
        <legend>Tính PT Bậc 2 Một ẩn</legend>
        <input type="number" name="a" placeholder="a">
        <input type="number" name="b" placeholder="b">
        <input type="number" name="c" placeholder="c">
        <input type="submit">
    </fieldset>
</form>
<?php

include "QuadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
}
 $quad = new QuadraticEquation($a,$b,$c);
$quad->display();
?>
</body>
</html>