<?php 

 $color = ["Red","Orange","Pink","Skyblue"];
 $things =["Cooker","Pink","Net"];
 $newList = ['c'=>"Orange",'b'=>"Omega",'a'=>"Pink"];
echo "<h2><pre>";

print_r(array_intersect($color, $things));
print_r(array_intersect($color, $things,$newList));

echo "</pre></h2>";
 ?>