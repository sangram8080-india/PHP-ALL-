<?php 

  $con = mysqli_connect('localhost','root');

  mysqli_select_db($con,'ajaxcrud');
  extract($_POST);

  if(isset($_POST['submit'])){

  	$q = "insert into ajaxinsert (username,userpass) values ('$userName','$userPass')";

  	 $query =  mysqli_query($con,$q);
  	 header('location:login.php');
  }


  ?>