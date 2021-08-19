<?php
session_start();
if(isset($_SESSION['password']))
{
    echo "";
}
else{
    header("location: ../admin.php");
}
?>
<?php
include("header.php");
include("titlehead.php");
include("../dbcon.php");
$sid=$_GET['sid'];
$sql="select * from student where rollno='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table align="center" border="1px solid black" style="width:70%;margin-top:40px;">
     <tr>
         <th>ROLL NO</th>
         <td><input type="number" name="rollno" value="<?php echo $data['rollno'];?>" required></td> 
     </tr>  
     <tr>
         <th>PASSWORD</th>
         <td><input type="text" name="pwd" value="<?php echo $data['password'];?>" required></td> 
     </tr>  
     <tr>
         <th>NAME</th>
         <td><input type="text" name="name" value="<?php echo $data['name'];?>" required></td> 
     </tr> 
     <tr>
         <th>CITY</th>
         <td><input type="text" name="city" value="<?php echo $data['city'];?>" required></td> 
     </tr> 
     <tr>
         <th>CONTACT NO</th>
         <td><input type="number" name="pcon" value="<?php echo $data['pcon'];?>" required></td> 
     </tr> 
     <tr>
         <th>STANDARD</th>
         <td><input type="number" name="std" value="<?php echo $data['standard'];?>" required></td> 
     </tr> 
     <!-- <tr>
         <th>IMAGE</th>
         <td><img src="../dataitem/<?php echo $data['image'] ?>" /></td>
     </tr> -->
     <!-- Designed by ©Sanskar Srivastava All right reserved 2021. -->
     <tr>
         <th>IMAGE</th>
         <td><a href="updateimg.php?sid=<?php echo $data['rollno'];?>"> <img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px"> </a> </td>
     </tr>
     <tr>
         <td colspan="2" align="center"><input type="hidden" name="sid" value="<?php echo $data['rollno'];?>"></td>
              <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td> 
     </tr> 
</table>
</form>
</body>
</html>