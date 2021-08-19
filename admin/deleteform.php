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
<!-- Designed by ©Sanskar Srivastava All right reserved 2021. -->
<?php
include("header.php");
include("titlehead.php");
include("../dbcon.php");
$sid=$_GET['sid'];
$sql="delete from student where rollno='$sid'";
$run=mysqli_query($con,$sql);
if($run==true)
{
    ?>
    <script>alert("student details deleted successfully");
    window.open("deletestudent.php","_self");
    </script>
    <?php
}
?>