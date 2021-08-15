<?php
include_once "Astronaut.php";
include_once "Mars.php";

   $test2 = new chocolate\Mars();
   $test4 = new chocolate\Mars;
   $test5 = new chocolate\Mars;
  echo $test4 -> getId();
  echo $test5 -> getId();
  $test2 = new chocolate\Mars();
 echo $test2 -> getId();
 $test3 = new planet\Mars();
  $test = new planet\Mars(); 
  $test3 -> setSize(25);
 echo $test3 -> getSize();

 $test1 = new Astronaut("gilbert");
 
echo $test1 ->getId();
   $test1 -> doActions();
  $test1 -> doActions($test);
   print_r($test1 ->getDestination());
   $test1 -> doActions($test3);
   $test1 -> doActions($test4);
   $test1 -> doActions($test5);
print_r($test1);
$sizeTest = $test1 ->getDestination();
echo $sizeTest -> getsize();

