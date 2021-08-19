<html>
    <head>
        <title>
            login page
        </title>
	<meta name="author" content="Sanskar Srivastava">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="1 days">
    </head>
    <body>
        <a href="admin.php" style="float:right">ADMIN LOGIN</a>
        <form method="post" action="index.php" style="position:relative;top:20%;left:40%">
            <h1>Welcome to Student Management System</h1>
        <table >
            <th style="align:center">
                student information
            </th>
            <tr>
                <td>USERNAME</td>
                <td><input type="text" name="uname" placeholder="username"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="pass" placeholder="password"></td>
            </tr>
            <tr>
                <td colspan="2" style="align:center"><input type="submit" value="login" name="login"></td>
            </tr>
        </table>
        </form>
    </body>

</html>
<?php
if(isset($_POST["login"]))
{
     $user=$_POST['uname'];
     $pass=$_POST['pass'];
     include('dbcon.php');
     include('function.php');
     showdetails($user,$pass);

}?>