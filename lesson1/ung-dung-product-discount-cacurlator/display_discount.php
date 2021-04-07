<?php
if($_SERVER["REQUEST_METHOD"] = "POST"){
    $description = $_POST["mo-ta"];
    $list_price = $_POST["niem-yet"];
    $percent = $_POST["chiet-khau"];



   echo  "gia dc giam:" . $discount_amount = $list_price * $percent * 0.01 . "<br>";
    echo "gia sau khi dc giam : ". $discount_price = $list_price - $discount_amount;

}
