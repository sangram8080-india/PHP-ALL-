<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome page</title>
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

   <div class="container"><br>

   	<h1 class="text-center text-primary">Insert Data  in PHP and MYSQL using Ajax</h1>
   	<br>
   	<div class="col-lg-8 m-auto">
   		
   		<form id="myform" action="insertphp.php" method="post">
   			<label>User Name:</label>

   			 <input type="text" name="userName" class="form-control" placeholder="User Name here...">
   			

   			<label>Password:</label>

   			 <input type="Password" name="userPass" class="form-control" placeholder="User Password here">
<br><br>

   			 <input type="submit" id="submit" name="submit" value="submit" class="btn btn-success">
   			
   		</form>
   	</div>
   	

   </div>


<script type="text/javascript">
	

	$(document).ready(function(){
		var  form = $('#myform');

		$('#submit').click(function(){

			$.ajax({
				url:form.attr("action"),
				type:'post',
				data:$('#myform input').serialize(),

				success:function(data){
					console.log(data);
				}
			})
			
		})
	})
</script>

</body>
</html>