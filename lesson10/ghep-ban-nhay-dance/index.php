<?php
include "Node.php";
include "Dancer.php";

 $dance = new Dancer();
 $dance->add("Khoi","male");
 $dance->add("Trong Dz","male");
 $dance->add("Tuan","male");
 $dance->add("Duy","male");

 $dance->add("Nga","female");
 $dance->add("Tuyet","female");
 $dance->add("Trang","female");

 echo $dance->get()."<br>";
 echo $dance->get()."<br>";
 echo $dance->get()."<br>";
 echo $dance->get()."<br>";