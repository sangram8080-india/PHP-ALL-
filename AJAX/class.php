<?php
 
 $con = mysqli_connect("localhost","root");

 mysqli_select_db($con,"formdb");

 $nameid = $_POST['datapost'];

 $q = "select * from classes where mid = ";

  $reuslt = mysqli_query($con,$q);

  while($rows = mysqli_fetch_array($result)){
    ?>

    <option value=""><?php echo $rows['class'];?></option>
    <?php
   }
?>
