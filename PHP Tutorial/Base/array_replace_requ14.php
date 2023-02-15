<?php 

     $array1 = array("a"=>array("red"),"b"=>array("green","pink"));
     $array2 = array("a"=>array("yellow"),"b"=>array("balck"));

     $total_c = array_replace_recursive($array1, $array2);
   print_r($total_c);

 ?>