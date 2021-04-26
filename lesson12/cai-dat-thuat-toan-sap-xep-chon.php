<?php
$array = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "<pre>";
print_r( sortSelect($array));
function sortSelect($array)
{
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i; $j < count($array); $j++) {
            if ($array[$j] < $array[$i]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
            }
        }
    return $array;
    }