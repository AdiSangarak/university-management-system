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

  <div class="dashboard">
   <table style="width:25%;" align="center">
     <tr>
       <td>1.</td>
       <td><a href="addstudent.php">INSERT STUDENTS</td>
    </tr>
     <tr>
       <td>2.</td>
       <td><a href="updatestudent.php">UPDATE STUDENTS</td>
    </tr>
     <tr>
       <td>3.</td>
       <td><a href="deletestudent.php">DELETE STUDENTS</td>
    </tr>
</div>
</body>
</html>
<!-- Designed by ©Sanskar Srivastava All right reserved 2021. -->