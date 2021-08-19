<?php

  function showdetails($user,$pass)
  {
      include('dbcon.php');
      $sql="select * from student where rollno='$user' and password=MD5('$pass') ";
      $run=mysqli_query($con,$sql);
      if(mysqli_num_rows($run)>0)
      {
          $data=mysqli_fetch_assoc($run);
          ?>
          <table border='1px solid black' style="width:50%;margin-top:200px;">
          <tr>
           <th colspan="3">Student Details</th>
          </tr>
          <tr>
               <td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px;max-width:120px;"></td>
               <th>Roll No</th>
               <td><?php echo $data['rollno'];?></td>
          </tr>    
          <tr>
               <th>Name</th>
               <td><?php echo $data['name'];?></td>
           </tr>    
           <tr>
               <th>Standard</th>
               <td><?php echo $data['standard'];?></td>
           </tr> 
           <tr>
               <th>Contact</th>
               <td><?php echo $data['pcon'];?></td>
           </tr>   
           <tr>
               <th>city</th>
               <td><?php echo $data['city'];?></td>
           </tr>   
          </table> 
          <?php
      } 
      else
      {
          echo "<script> alert('no student found');</script>";
      }
  }

?>