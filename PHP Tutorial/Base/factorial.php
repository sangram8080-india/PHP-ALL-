<?php 

 function fact($n){
 if($n==1){

 	return 1;
 }
 else{
 	return $n*fact($n-1);
 }
}

echo fact(6);
 
 ?>