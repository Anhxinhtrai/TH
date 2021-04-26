<?php
 $array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
print_r(bubbleSort($array));
 function bubbleSort($array){
     for($i=0 ; $i < count($array)-1; $i++){
         for ($j = $i+1 ;$j < count($array); $j ++){
             if($array[$i]>$array[$j]){
                 $temp = $array[$j];
                 $array[$j]= $array[$i];
                 $array[$i]= $temp;
             }
         }
     }
     return $array;
 }

