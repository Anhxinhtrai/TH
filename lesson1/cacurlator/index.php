<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    form{
        width: min-content;
        background-color: darkgray;
    }
</style>
<body>
<form method="post">
    <fieldset>
        <legend>Cacurlalor</legend>
        <input type="number" name="first" placeholder="Số thứ 1"> <br>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>
        <input type="number" name="second" placeholder="Số thứ 2"><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>
    <?php
    echo "<h2>Result</h2>";
    if ($_SERVER["REQUEST_METHOD"] = "POST"){
        $first = $_POST["first"];
        $opera = $_POST["operator"];
        $second = $_POST["second"];
            echo "$first $opera $second =";
            switch ($opera){
                case "+":
                    echo $first + $second;
                    break;
                case "-":
                    echo $first - $second;
                    break;
                case "*":
                    echo $first * $second;
                    break;
                case "/":
                    echo $first / $second;
                    break;
            }
    }
    ?>
</form>
</body>
</html>