<?php 

 $Details = [
   ["Rahul","Mumbai","+91-7675895957"],
   ["Ramu","Kokata","+91-7675895957"],
   ["Rajesh","Delhi","+91-7675895957"]
 ];echo "<table border=2>";

 echo "<tr>";
 echo "<thn>Name</th>";
  echo "<th>City Name</th>";
   echo "<th>Phone</th>";
 echo "</tr>";
 foreach ($Details as $key1) {
 	echo "<tr>";
 	foreach ($key1 as $key2 => $value2) {
 		 echo "<td>";
 		 echo $value2;
 		 echo "</td>";
 	}
 	echo "</tr>";
 }

 echo "<border>";

 ?>