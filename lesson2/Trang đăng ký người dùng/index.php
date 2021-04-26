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
        $name = '';
        $email= '';
        $phone= '';
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
}
if (empty($name) || empty($email) || empty($phone)) {
    echo "hãy điền đầy đủ thông tin";
} else {
    saveDataJSON("data.json", $name, $email, $phone);
}

function loadRegistrations($filename)
{
    $jsondata = file_get_contents($filename);
    $arr_data = json_decode($jsondata, true);
    return $arr_data;
}

function saveDataJSON($filename, $name, $email, $phone)
{
    try {
        $contact = array('name' => $name, 'email' => $email, 'phom\e' => $phone);
        $arr_data = loadRegistrations($filename); // chuyển đổi dữ liệu json thành mảng
        array_push($arr_data,$contact); // push dữ liệu người dùng vào mảng
        $jsondata = json_encode($arr_data ,JSON_PRETTY_PRINT); // Chuyển đổi mảng đã cập nhật thành JSON
        file_put_contents($filename,$jsondata); // ghi dữ liệu json vào tệp data.json
        echo "lưu thành công";
    } catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage(), "\n";
    }
}

?>
<?php
$registrations = loadRegistrations('data.json');
?>
<h2>Registration list</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($registrations as $registration): ?>
        <tr>
            <td><?= $registration['name']; ?></td>
            <td><?= $registration['email']; ?></td>
            <td><?= $registration['phone']; ?></td>
        </tr>
    <?php endforeach; ?>
</body>
</html>