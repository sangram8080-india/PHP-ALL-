<?php 

  $conn = mysqli_connect('localhost','root',"",'demo');

extract($_POST);


// readRecord()
if (isset($_POST['readrecord'])) {


    $data ='<table class="table table-bordered table-striped">

              <tr>

                  <th>No.</th>
                  <td>Frist Name</td>
                  <td>Last Name</td>
                  <td>email</td>
                  <td>mobile</td>

              </tr> ';

              $display ="SELECT *FROM demotable";

              $result = mysqli_query($conn,$display);

              if (mysqli_num_rows($result)>0) {


                $number =1;

                while ($row = mysqli_fetch_array($result)) {

                  $data .= '
              <tr>

                  <td>'.$number.'</td>
                  <td>'.$row['fristname'].'</td>
                  <td>'.$row['lastname'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.$row['mobile'].'</td>

                  <td>
                  <button onclick="GetUserDetails('.$row['id'].')" 
                  class="btn btn-warning ">Edit</button>"

                  </td>


                  <td>
                  <button onclick="DeleteUser('.$row['id'].')" 
                  class="btn btn-danger ">Delete</button>"

                  </td>


              </tr>                      

                  ';

          $number++;
                }

              }
                $data = '<table>';
                echo $data;

      
}





  if (isset( $_POST['fristname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile'])) {
    
    $query = "INSERT INTO demotable(fname,lname,email,mobile)values('$fristname','$lastname','$email','$mobile')";
    // echo "Welcome";

    mysqli_query($conn,$query);

    mysqli_close($conn);

  }

 ?>