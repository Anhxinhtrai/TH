<?php
session_start();
$path = session_save_path()."/ses_".session_id();
chmod($path,0640);

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
<div>

    <?php
    if (isset($_SESSION['mid'])) {
        echo "your number is : " . $_SESSION['mid'];
    }

    ?>
</div>

<form method="post">
    <button name="bigger">lớn hơn</button>
    <button name="smaller">nhỏ hơn</button>
    <button name="correct">chính xác</button>
    <button name="play">Play</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['bigger'])) {
        $_SESSION['low'] = $_SESSION['mid'];
        $_SESSION['mid'] = floor(($_SESSION['low'] + $_SESSION['high']) / 2);
    } elseif (isset($_POST['smaller'])) {
        $_SESSION['high'] = $_SESSION['mid'];
        $_SESSION['mid'] = floor(($_SESSION['low'] + $_SESSION['high']) / 2);
    } elseif (isset($_POST['correct'])) {
        echo "so" . $_SESSION['mid'] . "la so chinh xac";
        session_destroy();
    } elseif (isset($_POST['play'])){
        $_SESSION['low'] = 1;
        $_SESSION['high'] = 100;
        $_SESSION['mid'] = floor(($_SESSION['low'] + $_SESSION['high']) / 2);
        echo $_SESSION['mid'];
    }
}


