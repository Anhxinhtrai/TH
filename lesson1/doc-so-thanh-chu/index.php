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
    <input type="number" name="num" min="0" placeholder="Nhap so">
    <input type="submit" value="OK">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $num = $_POST["num"];
    switch ($num) {
        case "1":
            echo "Một";
            break;
        case "2":
            echo "Hai";
            break;
        case "3":
            echo "Ba";
            break;
        case "4":
            echo "Bốn";
            break;
        case "5":
            echo "Năm";
            break;
        case "6":
            echo "Sáu";
            break;
        case "7":
            echo "Bảy";
            break;
        case "8":
            echo "Tám";
            break;
        case "9":
            echo "Chín";
            break;
        default:
            echo "Không đọc được";
    }
    switch($num){
        case "10":
            echo "mười";
    }
}
?>
</body>
</html>