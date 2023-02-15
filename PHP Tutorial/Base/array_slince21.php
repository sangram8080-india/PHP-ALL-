<?php 

  $fruits1 = array('Apple','Mango','Banana','grapes');
   
  // $vag = array("tomato","Carry");


  print_r( array_slice($fruits1,1,3));
  echo "<br>";
  print_r(array_slice($fruits1,1,3, true));


 ?>