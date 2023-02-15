<?php 

  $color = [
     
      'R'=>"Red",
      'B'=>"Blue",
      'O'=>"Orange",
      'P'=>"Pink",
      'S'=>'Skyblue',
  ];


  echo "<h2><pre>";

   echo "Print Table with Key<br>";
   print_r($color);
   echo "<br><br> Array_Key value:<br>";
   print_r(array_keys($color));

   echo "<br><br> Array_Key_case  change case (uppar to lower and lower to upper)value:<br>";
   print_r(array_change_key_case($color));

   echo "<br><br> Array_Key_exist value:<br>";
   print_r(array_key_exists("B",$color));
echo "</pre></h2>";
 ?>