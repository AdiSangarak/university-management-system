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
?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table align="center" border="1px solid black" style="width:70%;margin-top:40px;">
     <tr>
         <th>ROLL NO</th>
         <td><input type="number" name="rollno" placeholder="enter roll no" required></td> 
     </tr>   
     <tr>
         <th>PASSWORD</th>
         <td><input type="text" name="password" placeholder="enter password" required></td> 
     </tr> 
     <tr>
         <th>NAME</th>
         <td><input type="text" name="name" placeholder="enter name" required></td> 
     </tr> 
     <tr>
         <th>CITY</th>
         <td><input type="text" name="city" placeholder="enter city" required></td> 
     </tr> 
     <tr>
         <th>CONTACT NO</th>
         <td><input type="number" name="pcon" placeholder="enter contact no" required></td> 
     </tr> 
     <tr>
         <th>STANDARD</th>
         <td><input type="number" name="std" placeholder="enter standard" required></td> 
     </tr> 
     <tr>
         <th>IMAGE</th>
         <td><input type="file" name="simg"></td> 
     </tr> 
     <tr>
         <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td> 
     </tr> 
</table>
</form>
</body>
</html>
<!-- Designed by ©Sanskar Srivastava All right reserved 2021. -->
<?php
if(isset($_POST['submit']))
{
    include("../dbcon.php");
    $rollno=$_POST['rollno'];
    $pwd=$_POST['password'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcon=$_POST['pcon'];
    $std=$_POST['std'];
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    $qry="INSERT INTO student (rollno,name,password,city,pcon,standard,image) VALUES('$rollno','$name',MD5('$pwd'),'$city','$pcon','$std','$imagename')";
    $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
        <script>
            alert('Data Inserted SUCCESSFUL');
    </script>
    <?php   
    } 
    
}  
?>