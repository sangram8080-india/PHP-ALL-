<?php 

// Associative Array in php

 $Emp_Details = array(
  array("EP-102","Raju"
   	,"computer Operaters",
   	12000
),
  array("EP-103","Mo.Owais"
   	,'Programmer',
   	34000
),
  array("EP-104","Mosime Ahamad"
   	,"Leader",
   	23203
)
 
 );
 // echo var_dump($marks);
    echo "<table  border=2  cellpadding=5>";
echo "<tr>";
echo "<th>Emp_ID</th>";
  echo "<th>Name</th>";
  echo "<th>Destination</th>";
  echo "<th>Sellary</th>";
echo "</tr>";

   foreach ($Emp_Details as list($emp_Id,$name,$dest,$sell)) {
        echo "<tr>";
          
           echo "<td>$emp_Id</td>";
           echo "<td>$name</td>";
           echo "<td>$dest</td>";
           echo "<td>$sell</td>";
        echo "<tr>";

    
   }
 ?>