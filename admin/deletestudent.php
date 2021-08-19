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
<table align="center">
<form action="deletestudent.php" method="post">
<tr>
     <th>Enter Standard</th>
    <td><input type="number" name="standard" placeholder="enter standard" required></td>
    <th>Enter Student Name</th>    
    <td><input type="text" name="stuname" placeholder="enter student name" required></td>
    <td colspan="2"><input type="submit" name="submit" value="search"></td>
</tr>    
</form>
</table>
<table align="center" width="80%" border="1px solid black" style="margin-top:10px;">
     <tr>
         <th>NO</th>
         <th>IMAGE</th>
         <th>NAME</th>
         <th>ROLL NO</th>
         <th>EDIT</th>
     </tr>
</table> 
<!-- Designed by ©Sanskar Srivastava All right reserved 2021. -->
<?php
if(isset($_POST['submit']))
{
    include("../dbcon.php");
    $standard=$_POST['standard'];
    $name=$_POST['stuname'];
    $sql="select * from student where standard='$standard' and name like '%$name%'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)<1)
    {
        echo "<tr><td colspan='5'>NO RECORD FOUND</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
        ?>
         <table align="center" width="80%" border="1px solid black" style="margin-top:10px;">
             <tr align="center">
         <th><?php echo $count;?></th>
         <th> <img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px"></th>
         <th><?php echo $data['name'];?></th>
         <th><?php echo $data['rollno'];?></th>
         <th><a href="deleteform.php?sid=<?php echo $data['rollno'];?>">DELETE</a></th>
     </tr>
     </table>
     <?php
    }
}}
?>