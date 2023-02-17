<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form submit using Ajax</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="
	sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script type="text/javascript" 
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
	
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
   
   <div class="container">

   <div class="row">
   	 
   	  <div class="col-lg-12"><br>
   	  	
 		 <h3 class="text-success text-center">AJAX Asynchronous Javascript and XML </h3>



 		  <form>
 		  	
 		  	 <div class="form-group mb-3">
					<label for="username">Username: &nbsp;&nbsp; </label>
 		  	 		<input type="text" name="username" placeholder="user name here.." class="form-control">
 		  	 </div>


 		  	 <div class="form-group mb-3">
 		  	 	<label for="pwd">Password :&nbsp;&nbsp; </label>
 		  	 	<input type="password" name="userpass" placeholder="user password here.." class="form-control" >

 		  	 </div>


 		  	  <div class="form-group mb-3">
 		  	  	 <label>Choose State :&nbsp;&nbsp;</label>
 		  	  	 <select class="form-control" onchange="myFun(this.value)">
 		  	  	 	<option>Select state</option>
 		  	  	 	<option>Maharastra</option>
 		  	  	 	<option>UP</option>
 		  	  	 	<option>Delhi</option>

 		  	  	 </select>
 		  	  </div>



 		  	  <div class="form-group mb-3">
 		  	  	 <label>Choose City :&nbsp;&nbsp;</label>
 		  	  	 <select class="form-control" id="city">
 		  	  	 	<option>Select City</option>

 		  	  	 </select>
 		  	  </div>

 		 	
 			 <button onclick="clickFun()" type="sbumit" class="btn btn-primary">submit</button>
 		  </form>

   	  </div>

   </div>
   </div>



<script type="text/javascript">
	

	function myFun(data){


		 var req = new XMLHttpRequest();
		 req.open("GET","http://localhost/AJAX/SelectionBox/response.php?datavalue="+data,true);
         


		 req.send();


		 req.onreadystatechange=function(){
		 	if (req.readyState==4 && req.status==200) {


		 		document.getElementById('city').innerHTML=req.responseText;

		 	}
		 	
		 }

	}

	
	function clickFun(){

		document.write("<h1>SUCCESSFULL......</h1>")

	}


</script>
 
</body>
</html>