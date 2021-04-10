<?php
include "StopWatch.php";

 $stopWatch = new StopWatch();
 $stopWatch->start();
 for ($i=0;$i<1000000;$i++){
     echo "";
 }
 $stopWatch->stop();
 echo $stopWatch->getElapsedTime();