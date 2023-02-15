
<?php 

  $items = [
       "Asia"=>array("India","Pakistan","Nepal","Bangladesh","Shreelanka"),
       "Urop"=>array("England","Ukrain","Germany","Newziland"),
       "America"=>array("USA","Brazile","Canada",)
   
  ];

  foreach ($items as $key => $value) {


  echo array_search("Newziland", $value);
}

 ?>