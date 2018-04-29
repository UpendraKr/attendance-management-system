


<html>
<head>
<title>admin</title>
<style>
body{
	background-color:#9c9f84;
}
#a{
	border: 3px solid black;
    border-radius:10px;
    margin-top:20px;
	margin-bottom:0px;
     margin-right:300px;
	margin-left:300px;   
	 padding:50px;
	}
	</style>
</head>
<body>

<a href="index.html">Go to home</a>
<div align="center" id="a">
<h1 align="center"><u> log in</u> </h1>
<table>
<form action="adminlogin.php" method="post">

<tr>
<td> Enter email : </td><td><input type="email" name="email"></td>
 </tr>
<tr>
<td> Enter password :</td><td> <input type="password" name="password"></td>
</tr>
<tr>
 <td><input type="submit" value="log-in"></td>
 </tr>
</form>
 </table>

</div>

</body>
</html>


<?php
session_start();
$lnemail=$_POST['email'];                            // get value from login form
$lnpassword=$_POST['password'];

$mysqli = new mysqli("localhost","root","","project2");                     

$data = $mysqli->query("select email,password from table1 where email='$lnemail' and password='$lnpassword' ");                 //query

$row=mysqli_fetch_array($data);                   //data fetch from table

$count = mysqli_num_rows($data);
      
      // If result matched $lnemail and $lnpassword, table row must be 1 row
		
     if($count == 1) {

         $_SESSION['admin'] = $lnemail;                               // we stored value of login user in session variable named " login_user"
         
        header("location:admin.php");
      }
      

?>


