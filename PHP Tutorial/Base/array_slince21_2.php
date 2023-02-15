<?php 
  
  $color = array("blue","orange","skyblue","Yellow","orange");
   
  $fruits = ["apple","Banana","Mango"];

  echo "<pre>";

 // print_r(array_splice($color,2,3,$fruits));
   // print_r(array_splice($color,2,count($color),$fruits));
   print_r(array_splice($color,count($color),0,$fruits));
  echo "</pre>";

 ?>