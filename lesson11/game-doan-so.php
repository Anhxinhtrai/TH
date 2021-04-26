<?php

function gessNumber($numbers,$x){
    $low = 0;
    $high = count($numbers);

while ($low<=$high){
    $mid = floor(($low+$high)/2);
    if ($numbers[$mid]<$x){
        $low=$mid;
        echo "số  $numbers[$mid] nhỏ hơn số tôi nghĩ ra <br>";
    }elseif ($numbers[$mid]>$x){
        $high = $mid;
        echo "số $numbers[$mid] lớn hơn số tôi nghĩ ra<br>";
    }else{
        echo "số $numbers[$mid] chính xác là số tôi nghĩ ra";
        return;
    }
}
}
$numbers = range(1,100);
gessNumber($numbers,82);


