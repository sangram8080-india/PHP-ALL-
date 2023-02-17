<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/	ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/	JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">


   function readRecord(){

          var readrecord ="readrecord";

          $.ajax({


          	url:"backend1.php",
          	type:'POST',
          	data:{
          		readrecord:readrecord
          	},

          	success:function(data,status){

          		$('records_contant').html(data);
          	}

          })

   }

   function addRecord() {


   	 	var fristname = $('#fristname').val();
   	 	var lastname = $('#lastname').val();
   	 	var email = $('#email').val();
   	 	var mobile = $('#mobile').val();

   	 	$.ajax({

   	 		url:'backend1.php',
   	 		type:'POST',
   	 		data:{
   	 			fristname:fristname,
   	 			lastname:lastname,
   	 			email:email,
   	 			mobile:mobile
   	 		},

   	 		success:function(data,status){

   	 			readRecords();

   	 		}


   	 	});

   }
  </script>


	<title></title>
</head>
<body>


 <div class="container">
 	

 	<h1 class="bg-primary text-uppercase text-center">
 		AJAX CURD OPERATION
 	</h1>

 	<div class="d-flex justify-content-end">
 		
 		<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

 	</div>

 	<h2 class="text-danger"> All Records</h2>

 	<div id="records_contant">
 		
 	</div>


 		<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title">Modal Header</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          

      </div>
      <div class="modal-body">

 	    <div class="form-group">
 	    	
 	    	<label>FristName:</label>
 	    	<input type="text" name="firstname" id="fristname" class="form-control">

 	    </div>


 	    <div class="form-group">
 	    	
 	    	<label>LastName:</label>
 	    	<input type="text" name="lastname" id="lastname" class="form-control">
 	    	
 	    </div>

        
 	    <div class="form-group">
 	    	
 	    	<label>Email ID:</label>
 	    	<input type="Email" name="email_id" id="email" class="form-control">
 	    	
 	    </div>


 	    <div class="form-group">
 	    	
 	    	<label>Phone:</label>
 	    	<input type="text" name="pone" id="mobile" class="form-control">
 	    	
 	    </div>


      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-danger" onclick="addRecord()" data-dismiss="modal">Save</button>	
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 </div>
 

</body>
</html>