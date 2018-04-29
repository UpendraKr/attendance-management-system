<html>
<head>
      <title>Profile </title>
	  <link rel="stylesheet" href="style.css"/>
	  <style>
	  #a{
		  border: 3px solid black;
		  border-radius:10px;
		  padding:2%;
		  
		
		  
	font-size:20px;
    margin-top:5%;
     margin-right:35%;
	margin-left:35%;   
	}
</style>
</head>
<body>
<div id="header">
<h1 >Attendance Management System</h1>
</div>
<div id="navbar">
<UL>
<LI><a href="profile.php">HOME</a></LI>

<LI><a HREF="sabout.php">ABOUT US</a></LI>
<LI><a href="scontact.php">CONTACT US</a></LI>
</UL>
</div>
<?php
session_start();  
 //include('session.php');
 if($_SESSION['login_user']==true)                                                                  // if you have logged in then only can print
 {
	    echo '<button><a href = "logout.php"> log Out</a></button>';
        echo  " WELCOME"." "." (Student)"." ".$_SESSION['login_user'];                                               //print session variable value
 }
 else
 {
	 header("location:index.html");
 }
 ?>
 <br><br>
 <h1 align ="center">Check your attendance</h1>
 <p align="center">(Find your current, total and percentage attendance)</p>
 
<div id="a">
<form action="profile.php" method ="post">
Subject      : <select name="subject">
    <option value="physics">physics</option>
    <option value="math">math</option>
    <option value="chemistry">chemistry</option>
  </select><br>
 
<input type="submit" value="submit"></td>
</form>
</div>

</body>
 </html>
<?php
$subject = $_POST['subject'];


 /*          ------fetch id of loged user -----*/  
$email = $_SESSION['login_user'];
$mysqli = new mysqli("localhost","root","","project2"); 
$data = $mysqli->query("select id from student where email='$email' "); 
 $row=mysqli_fetch_array($data); 
 $id=$row['id'];

                                                        
$_SESSION['id'] =$id;              /*   now,  to take this $id value on next page ,store $id value  in session variable*/


if($subject=="physics")
{
	header("location: physics.php");
}
if($subject=="math")
{
	header("location: math.php");
}
if($subject=="chemistry")
{
	header("location: chemistry.php");
}

?>