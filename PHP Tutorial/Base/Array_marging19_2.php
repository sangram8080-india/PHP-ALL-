<?php 
   	
   	 $fruits1 = ['a'=>'apple','b'=>'banana','c'=>'kiwi'];
     $fruits2=['a'=>'mango','d'=>'orange',55,80];

     $newFruitesList = array_merge($fruits1,$fruits2);

     print_r($newFruitesList);


 ?>