<?php

        function binarySearch($numbers,$x){
            $low = 0;
            $high = count($numbers);

            while ($low<=$high){
                $mid = floor(($low+$high)/2);
                if($numbers[$mid]<$x){
                    $low = $mid;
                }elseif ($numbers[$mid]>$x){
                    $high = $mid;
                }else{
                    return $mid;
                }
            }
            return -1;
        }

        $numbers = [1,2,3,4,5,6,7,8,9,10];

     echo   binarySearch($numbers,6);


