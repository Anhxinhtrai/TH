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
    <input type="number" name="dau-tu" placeholder="số tiền đầu tư"><br>
    <input type="number" name="lai-suat" placeholder="lãi suốt năm"><br>
    <input type="number" name="nam-dau-tu" placeholder="số năm đầu tư"><br>
    <input type="submit" value="Calculate">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] = "POST"){
        $dau_tu = $_POST['dau-tu'];
        $lai_suat = $_POST['lai-suat'];
        $nam_dau_tu = $_POST['nam-dau-tu'];
        $tien_nhan_duoc = $dau_tu + ($dau_tu * $lai_suat);
        echo $tien_nhan_duoc;
}
?>
</body>
</html>