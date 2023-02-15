<?php 
 
 $Citys = array("Delhi","Mumbai","Kolkata");

 // echo var_dump($Citys);


echo "<table border=2>";

 foreach ($Citys as $key => $value) {
 	echo "<tr>";
 	echo "<td>".$value."</td>";
 	echo "</tr>";
 }

 echo "</table>";
  
 ?>