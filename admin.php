<?php
session_start();
if(isset($_SESSION['uid']))
{
    header("location:admin/admindash.php");
}
?>
    <head>
        <title>
           admin login page
        </title>
	<meta name="author" content="Sanskar Srivastava">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="1 days">
    </head>
    <body>
        <a href="index.php" style="float:right">STUDENT LOGIN</a>
        <form method="post" action="admin.php" style="position:relative;top:20%;left:40%">
        <table>
            <tr>
                <td>ADMIN USERNAME</td>
                <td><input type="text" name="uname" placeholder="username"></td>
            </tr>
            <tr>
                <td>ADMIN PASSWORD</td>
                <td><input type="password" name="pass" placeholder="password"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="login" name="login"></td>
            </tr>
        </table>
        </form>
    </body>
<?php
include("dbcon.php");
if(isset($_POST["login"]))
{
    $username=$_POST["uname"];
    $password=$_POST["pass"];
    $qry="SELECT * FROM admin  WHERE username ='$username' AND password=MD5('$password') ";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row==0)
    {
         ?>
        <script>
            alert("Username or Password not match!!");
            window.open("admin.php","_self");
        </script>    
        <?php

    }
    else  
    {
       
        $data=mysqli_fetch_assoc($run);
        $id=$data['username'];
        $_SESSION['password']=$id;
        header("location:admin/admindash.php");
    }
}
?>

<!-- Designed by ©Sanskar Srivastava All right reserved 2021. -->