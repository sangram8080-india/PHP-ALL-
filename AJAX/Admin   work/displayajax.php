<?php 

 $con = mysqli_connect("localhost","root");
  mysqli_select_db($con,'ajaxcrud');


   $q  = "select *from ajaxinsert";

   $query = mysqli_query($con,$q);



   if(mysqli_num_rows($query)>0){


   	while (($result = mysqli_fetch_array($query))) {
   		?>
   		
   		<tr>
   		<th><?php echo $result['id']; ?></th>
   		<td><?php echo $result['username'] ;?></td>
   		<td><?php echo $result['userpass'] ;?></td>

   		</tr>
   		

   <?php
   	}
   }

 ?>