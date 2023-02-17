<?php
 
 $con = mysqli_connect("localhost","root");

 mysqli_select_db($con,"formdb");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>
<body>
 
 

 <div class="container">

 <h1 class="text-center text-danger">Get data from the database</h1>

  <form action="post">

   username:  <input type="text" name="userName" class="form-control" placeholder="Name here..."/><br>

   password: <input type="text" name="userPass" class="form-control" placeholder="Password here..."/><br>

   Degree:
        <select name="" id="" class="form-control" onchange="myfun(this.value)">

            <option value="">Select Degrees</option>
            
            
            <?php
             
              $q= "select * from degree";

              $result = mysqli_query($con,$q);

               while($rows = mysqli_fetch_array($result)){
                ?>

                <option value=""><?php echo $rows['degrees'];?></option>
                <?php
               }
            ?>


        </select><br>

         Class: <select name="" id="" class="form-control" id="dataget">

           <option value="">Choose Years</option>

         </select>
         <br><br>

         <button class="btn btn-primary">submit</button>

    

  </form>

 </div>

 <script type="text/javascript">

  function myfun(datavalue){
    $.ajax({
      url: "class.php",
      type:"POST",
      data:{datapost:datavalue}, 
     success: function(result){
      $("#dataget").html(result);
    } 
     });
  }

</script>
</body>
</html>