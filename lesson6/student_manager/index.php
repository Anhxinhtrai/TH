<?php

require __DIR__ . '/vendor/autoload.php';

use App\StudentManager;

$studentManager = new StudentManager('data.json');
$students = $studentManager->getAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <a href="view/add.php">
        <button>Add</button>
    </a>
    <table>
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Day Of Birth</td>
            <td>Math Point</td>
            <td>Physic Point</td>
            <td>Chemistry Point</td>
            <td>Average Point</td>
            <td>Delete</td>
            <td></td>
        </tr>
        <?php foreach ($students as $key => $student) { ?>
            <tr>
                <td><?php echo $key + 1; ?> </td>
                <td><?php echo $student->getName(); ?> </td>
                <td><?php echo $student->getDob(); ?> </td>
                <td><?php echo $student->getMath(); ?> </td>
                <td><?php echo $student->getPhysic(); ?> </td>
                <td><?php echo $student->getChemistry(); ?> </td>
                <td><?php echo $student->avg(); ?> </td>
                <td><a onclick="return confirm('are you sure?')" href="view/delete.php?id=<?php echo $key ?>">Delete</a></td>
                <td><a href="view/edit.php?id=<?php echo $key ?>">Edit</td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
