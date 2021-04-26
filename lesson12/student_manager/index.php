<?php

require __DIR__ . '/vendor/autoload.php';

use App\StudentManager;

$studentManager = new StudentManager('data.json');
$students = $studentManager->getAll();

session_start();
if (isset($_SESSION["name"])) {
    echo "Chào bạn " . $_SESSION["name"] . " nhé";
} else {
    header("location: login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["logout"])){
        session_destroy();
        header("location: login.php");
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post">
    <button type="submit" name="logout">đăng xuất</button>
</form>
<div class="container">
    <a href="view/add.php">
        <button>Add</button>
    </a>
    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Day Of Birth</th>
            <th>Email</th>
            <th>Phone</th>
            <th colspan="2">Refactor</th>
        </tr>
        <?php foreach ($students as $key => $student) { ?>
            <tr>
                <td><?php echo $key + 1; ?> </td>
                <td><?php echo $student->getName(); ?> </td>
                <td><?php echo $student->getDob(); ?> </td>
                <td><?php echo $student->getEmail(); ?> </td>
                <td><?php echo $student->getPhone(); ?> </td>
                <td><a onclick="return confirm('are you sure?')" href="view/delete.php?id=<?php echo $key ?>">Delete</a></td>
                <td><a href="view/edit.php?id=<?php echo $key ?>">Edit</td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
