<?php
require  '../vendor/autoload.php';
use App\StudentManager;

$index = $_REQUEST['id'];
$studentManager = new StudentManager('../data.json');
$studentManager->remove($index);
header('location: ../index.php');
