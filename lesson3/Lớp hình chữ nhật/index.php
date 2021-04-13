<?php


include "Rectangle.php";

$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo $rectangle->width . "<br>"; // 0utput: 10
echo $rectangle->height . "<br>"; // 0utput: 20

$rectangle->height = 30;
$rectangle->width = 20;

echo $rectangle->height . "<br>";
echo $rectangle->width . "<br>"; // 0utput: 20
echo $rectangle->getPerimeter() . "<br>"; // 0utput: 100
echo $rectangle->getArea() . "<br>"; // Output: 600
echo("Your Rectangle" . $rectangle->display());