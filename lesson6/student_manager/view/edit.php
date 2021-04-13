<?php
require '../vendor/autoload.php';

use App\StudentManager;

$studentManager = new StudentManager('../data.json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $index = $_REQUEST['index'];
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $dob = $_REQUEST['dob'];
    $math = $_REQUEST['math'];
    $physic = $_REQUEST['physic'];
    $chemistry = $_REQUEST['chemistry'];
    $data = [
        'id' => $id,
        'name' => $name,
        'dob' => $dob,
        'math' => $math,
        'physic' => $physic,
        'chemistry' => $chemistry
    ];
    $studentManager->edit($index, $data);
    header('location: ../index.php');
} else {
    $index = $_REQUEST['id'];
    $student = $studentManager->getStudentByIndex($index);
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
    <table>
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name" placeholder="Name" value="<?php echo $student->getName() ?>">
                <input type="text" name="id" hidden value="<?php echo $student->getId() ?>">
                <input type="text" name="index" hidden value="<?php echo $index ?>">
            </td>
        </tr>
        <tr>
            <td>
                Day of Bird
            </td>
            <td>
                <input type="date" name="dob" placeholder="Day of Bird" value="<?php echo $student->getDob() ?>">
            </td>
        </tr>
        <tr>
            <td>
                Math Point
            </td>
            <td>
                <input type="number" name="math" placeholder="Math Point" value="<?php echo $student->getMath() ?>">
            </td>
        </tr>
        <tr>
            <td>
                Physic Point
            </td>
            <td>
                <input type="number" name="physic" placeholder="Physic Point"
                       value="<?php echo $student->getPhysic() ?>">
            </td>
        </tr>
        <tr>
            <td>
                Chemistry Point
            </td>
            <td>
                <input type="number" name="chemistry" placeholder="Chemistry Point"
                       value="<?php echo $student->getChemistry() ?>">

            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>




