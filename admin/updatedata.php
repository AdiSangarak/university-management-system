<?php
    $rollno=$_POST['rollno'];
    $password=$_POST['pwd'];   
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcon=$_POST['pcon'];
    $std=$_POST['std'];
    $id=$_POST['sid'];
//    $imagename=$_FILES['simg']['name'];
//    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    include("../dbcon.php");
    $qry="update student set rollno='$rollno',password=MD5('$password') ,name='$name',city='$city',pcon='$pcon',standard='$std'where rollno='$id'";
//,image='$imagename' 

    $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
        <script>
            alert('Data Updated SUCCESSFUL');
            window.open("updateform.php?sid=<?php echo $id;?>","_self");
    </script>
    <?php   
    } 
    ?>