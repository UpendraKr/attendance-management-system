<?php

session_start();                                        // start a session
$lnemail=$_POST['email'];                            // get value from login form
$lnpassword=$_POST['password'];
$lntype=$_POST['type'];

$mysqli = new mysqli("localhost","root","","project2");

if($lntype==student)
{
	$data = $mysqli->query("select email,password from student where email='$lnemail' and password='$lnpassword' "); 
    $row=mysqli_fetch_array($data);                    //data fetch from table

    $count = mysqli_num_rows($data);	
    if($count == 1)
	{                                                                // If result matched $lnemail and $lnpassword, table row must be 1 row
                $_SESSION['login_user'] = $lnemail;                               // we stored value of login user in session variable named " login_user"
         
                header("location: profile.php");
     }
}

else if($lntype==teacher)
{
	$data = $mysqli->query("select email,password from teacher where email='$lnemail' and password='$lnpassword' "); 
    $row=mysqli_fetch_array($data);                    //data fetch from table

    $count = mysqli_num_rows($data);	
    if($count == 1)
	{                                                             
                $_SESSION['teacher'] = $lnemail;                          
         
                header("location: teacher.php");
     }
}
else if($lntype==admin)
{
	$data = $mysqli->query("select email,password from admin where email='$lnemail' and password='$lnpassword' "); 
    $row=mysqli_fetch_array($data);                    //data fetch from table

    $count = mysqli_num_rows($data);	
    if($count == 1)
	{                                                               
                $_SESSION['admin'] = $lnemail;                          
         
                header("location: admin.php");
     }
}

 echo "Your Login email or Password is invalid";

?>