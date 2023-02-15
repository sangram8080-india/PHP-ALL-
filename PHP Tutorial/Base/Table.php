<?php 

// Associative Array in php

 $marks = array(
   "Mahesh"=>array(85
   	,95,
   	100
),
  "Rahul"=>array(85
   	,95,
   	100
),
  "Subhan Raj"=>array(85
   	,95,
   	100
)
 
 );
 // echo var_dump($marks);

 echo "<table  border=2  cellpadding=5>";
echo "<tr>";
echo "<th>Name</th>";
  echo "<th>Physics</th>";
  echo "<th>Chemistry</th>";
  echo "<th>Math</th>";
echo "</tr>";


 foreach ($marks as $key1=>$value) {
 	echo "<tr>";
             echo "<td align=center>".$key1."</td>";	
 	   	foreach ($value as $key) {
 	   	
        echo "<td align=center>".$key."</td>";	
      
        
  }
    echo "</tr>";
 	
 } 	
echo "</table>";
 
 ?>